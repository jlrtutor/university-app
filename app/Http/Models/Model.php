<?php
namespace App\Http\Models;

use App\Http\Models\ModelField;
use App\Core;

require_once __DIR__ . '/ModelField.php';


Class Model
{
    public $__table;
    public $__field = [];
    public $__data;
    public $__validations_errors = [];
    
    public function __construct($table)
    {
        if($table){
            $this->__table = $table;
        }else{
            throw new Exception('Error making a Model without table name');
        }
    }
    
    //Magic method for Bind Foreign keys objects 
    public function __call($method, $parameters){
        if( preg_match('/get(.*)/', $method, $match) )
        {
            $field = strtolower($match[1]);
            if(array_key_exists( $field . "_id", $this->__field) && $this->__field[$field . "_id"]->FK){
                require_once __DIR__ . "/" . $field . ".php";
                $class = __NAMESPACE__ . '\\' . $field;
                if( class_exists( $class ) )
                {
                    $obj = new $class();
                    $field = $field . "_id";
                    return $obj->getById($this->$field);                    
                } else {
                    return null;
                }
            }
        }
    }


    public function update($data)
    {
        $this->__data = $data;
        $this->validateFields();

        if($this->__validations_errors)
            return false;
        
        return $this->save();
    }

    public function insert($data)
    {
        $this->__data = $data;
        $this->validateFields();
        
        if($this->__validations_errors){
            return false;
        }

        $pk = null;
        $sql = " INSERT INTO " . $this->__table . " ( ";
        foreach($this->__data as $name=>$value)
        {
            if(!$this->__field[$name]->PK)
                $fields[] = "`$name`";
        }
        $sql.= implode(", ", $fields);
        
        $sql.= ") VALUES (";
        
        foreach($this->__data as $name=>$value)
        {
            if(!$this->__field[$name]->PK)
                $values[] = ":$name";
            else
                unset($this->__data[$name]);
        }
        $sql.= implode(", ", $values);

        $sql.= ")";

        Core::db()->prepare($sql)->execute($this->__data);
        return Core::db()->lastInsertId();
    }

    public function save()
    {
        $pk = null;
        $sql = " UPDATE " . $this->__table . " SET ";
        foreach($this->__data as $name=>$value)
        {
            if(!$this->__field[$name]->PK)
                $fields[] = "`$name`=:$name";
            else
                $pk = $name;
        }
        $sql.= implode(", ", $fields);
        $sql.= " WHERE `$pk`=:$pk";

        return Core::db()->prepare($sql)->execute($this->__data);
    }

    public function delete($id)
    {
        $pk = null;
        $sql = " DELETE FROM " . $this->__table;
        foreach($this->__field as $name=>$options)
        {
            if($options->PK){
                $pk = $name;
                break;
            }
        }
        $sql.= " WHERE `$pk`=:$pk";
        return Core::db()->prepare($sql)->execute( [$name=>$id] );
    }

    public function validateFields()
    {
        foreach($this->__field as $field)
        {
            if(!$field->validate)
                continue;

            //Not setted but a default value is defined, then set it
            if(!isset($this->__data[$field->name]) && !is_null($field->default))
                $this->__data[$field->name] = $field->default;

            //Required but not setted and no default value
            if($field->required && !isset($this->__data[$field->name]) && is_null($field->default))
                $this->__validations_errors[$field->name]['required'] = true;
            
            //Required and setted but empty value
            if($field->required 
                && isset($this->__data[$field->name]) 
                && $this->blank($this->__data[$field->name]) == "")
                $this->__validations_errors[$field->name]['empty'] = true;

            //Required and setted with no default value and invalid value
            if($field->required 
                && isset($this->data[$field->name]) 
                && !is_null($field->default) 
                && !is_null($field->values) 
                && array_key_exists($this->__data[$field->name], $field->values))
                $this->__validations_errors[$field->name]['values'] = true;

            switch($field->type)
            {
                case "float":
                    if( isset($this->__data[$field->name]) 
                        && !$this->isFloat($this->__data[$field->name]))
                        $this->__validations_errors[$field->name]['type']['float'] = false;
                    break;

                case "integer":
                    if( isset($this->__data[$field->name]) 
                        && !$this->isInteger($this->__data[$field->name]))
                        $this->__validations_errors[$field->name]['type']['integer'] = false;
                    break;

                case "string":
                    if(isset($this->__data[$field->name]) && $this->blank($this->__data[$field->name])=="")
                        $this->__validations_errors[$field->name]['type']['string'] = false;
                    break;

                case "boolean":
                    if(!isset($this->__data[$field->name]))
                    {
                        if($field->required){
                            $this->__data[$field->name] = is_null($field->default)?$field->default:0;
                        }
                    }

                    if(isset($this->__data[$field->name]) && $this->__data[$field->name] === 'on')
                        $this->__data[$field->name] = 1;
                    
                    if( $field->required 
                    && isset($this->__data[$field->name]) 
                    && $this->__data[$field->name] !== 0 
                    && $this->__data[$field->name] !== 1 )
                    $this->__validations_errors[$field->name]['type']['boolean'] = false;
                    break;

                case "date":
                //case "datetime":
                    if(!$this->isDate($this->__data[$field->name], DATE_FORMAT_WEB))
                    {
                        $this->__validations_errors[$field->name]['type']['date'] = false;
                    }else{
                        //Date field validated, so just convert it to database format
                        $this->__data[$field->name] = $this->convertDateToDB($this->__data[$field->name], DATE_FORMAT_WEB, DATE_FORMAT_DB);
                    }
                    break;
            }

            if(isset($field->range) && !empty($this->__data[$field->name]))
            {
                if (!($this->__data[$field->name] >= $field->range[0]) ||
                    !($this->__data[$field->name] <= $field->range[1])) {
                    $this->__validations_errors[$field->name]['range'] = false;
                } 
            }
        }
    }

    public function field($fieldname, $type = 'string', $options = array())
    {
        $field = new ModelField();
        $field->name = $fieldname;
        $field->type = $type;
        $field->setOptions($options);

        //Hack for checkboox fields. If not checked, no post sent, so put a default value...
        if($type==="boolean" 
            && $field->required 
            && $field->validate 
            && is_null($field->default))
            $field->setOptions(array('default'=>0));

        $this->__field[$fieldname] = $field;
    }

    public function isInteger($number)
    {
        $number = filter_var($number, FILTER_VALIDATE_INT);
        return ($number !== FALSE);
    }

    public function isFloat($number)
    {
        $number = filter_var($number, FILTER_VALIDATE_FLOAT);
        return ($number !== FALSE);
    }

    public function isEmail($email) 
    {
        return filter_var( $email, FILTER_VALIDATE_EMAIL );
    }

    public function isSafeString($string)
    {
        if($this->satinize($string)!="")
        {
            return true;
        } else {
            return false;
        }
    }

    public function isDate($date, $format)
    {
        $d = \DateTime::createFromFormat($format, $date);
        return ($d && $d->format($format) == $date);
    }

    public function convertDateToDB($date, $format_web, $format_db)
    {
        $d = \DateTime::createFromFormat($format_web, $date);
        return $d->format($format_db);
    }
    
    public function satinize($value)
    {
        $value = $this->blank($value);
        $value = strip_tags(); //remove html tags
        $value = filter_var($value, FILTER_SANITIZE_MAGIC_QUOTES); //addslashes();
        $value = filter_var($value, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); //remove é à ò ì ` ecc...
        $value = htmlentities($value, ENT_QUOTES,'UTF-8'); //for major security transform some other chars into html corrispective...
   
        return $value;
    }

    public function blank($value)
    {
        $value = trim($value); //remove empty spaces
        $value = filter_var($value, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW); //remove /t/n/g/s
        return $value;
    }

    function isDateTime($dateStr, $format)
    {
        date_default_timezone_set('UTC');
        $date = DateTime::createFromFormat($format, $dateStr);
        return $date && ($date->format($format) === $dateStr);
    }
    
}