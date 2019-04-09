<?php
namespace App\Http\Models;

Class ModelField
{
    public $name;
    public $type;
    public $PK;
    public $default;
    public $required;
    public $validate;
    public $values;

    public function __construct()
    {
        $this->name = null;
        $this->type = null; 
        $this->PK = false;
        $this->default = null;
        $this->required = true;
        $this->validate = true;
        $this->values = null;
    }

    public function setOptions($options)
    {
        foreach($options as $option=>$value)
        {
            $this->$option = $value;
        }
    }

    
}