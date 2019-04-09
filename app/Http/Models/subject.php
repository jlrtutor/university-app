<?php
namespace App\Http\Models;

use App\Core;

require_once __DIR__ . '/Model.php';

Class subject extends Model
{
    private $__valid_type = ['FORMACIÓN BÁSICA','OBLIGATORIAS','OPTATIVAS'];
    private $__valid_course = [1,2,3,4,5];
    private $__valid_semester = [1,2,3];


    public function __construct()
    {
        parent::__construct('subjects');

        $this->field('id', 'integer', ['PK'=>true, 'validate'=>false] );
        $this->field('name');
        $this->field('code');
        $this->field('type', 'string', ['values'=>$this->__valid_type]);
        $this->field('course', 'integer', ['values'=>$this->__valid_course]);
        $this->field('semester', 'integer', ['values'=>$this->__valid_semester]);
        $this->field('credits', 'integer', ['range'=>[0,12]]);
        $this->field('active', 'boolean');
        $this->field('delete', 'boolean', ['required'=>false, 'validate'=>false]);
    }

    public function toggleActive($id)
    {
        $stmt = Core::db()->prepare("UPDATE " . $this->__table . " SET active=CASE WHEN active=1 THEN 0 WHEN active=0 THEN 1 END
        WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        return $stmt->rowCount();
    }

    public function getById($id)
    {
        $stmt = Core::db()->prepare("SELECT `id`, `name`, `code`, `type`, `course`, `semester`, `credits`, `active`, `delete` 
        FROM " . $this->__table . " WHERE `delete` = 0 AND `id` = :id");

        $stmt->execute(['id'=>$id]);
        return $stmt->fetchObject();
    }

    public function getByCourse($course)
    {
        $stmt = Core::db()->prepare("SELECT `id`, `name`, `code`, `type`, `course`, `semester`, `credits`, `active`, `delete` 
        FROM " . $this->__table . " WHERE `delete` = 0 AND `course` = :course");

        $stmt->execute(['course'=>$course]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . "\\subject");
    }

    public function getAll($delete = 0)
    {
        $stmt = Core::db()->prepare("SELECT `id`, `name`, `code`, `type`, `course`, `semester`, `credits`, `active`, `delete` 
        FROM " . $this->__table . " WHERE `delete` = " . $delete);
        
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . "\\subject");
    }
}