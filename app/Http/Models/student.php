<?php
namespace App\Http\Models;

use App\Core;

require_once __DIR__ . '/Model.php';

Class student extends Model
{
    private $valid_genre = ["male", "female"];
    
    public function __construct()
    {
        parent::__construct('students');

        $this->field('id', 'integer', ['PK'=>true, 'validate'=>false] );
        $this->field('name');
        $this->field('surname');
        $this->field('genre', 'string', ['values'=>$this->valid_genre]);
        $this->field('birthdate', 'date');
        $this->field('email');
        $this->field('dni');
        $this->field('address');
        $this->field('cp');
        $this->field('town');
        $this->field('province');
        $this->field('telephone');
        $this->field('delete', 'boolean', ['default'=>0,'required'=>false]);
    }

    public function getById($id)
    {
        $stmt = Core::db()->prepare("SELECT `id`, `name`, `surname`, `dni`, `genre`, `birthdate`, `address`, `cp`, `town`, `province`, `telephone`, `email`, `delete` 
        FROM " . $this->__table . " WHERE `delete` = 0 AND `id` = :id");

        $stmt->execute(['id'=>$id]);
        return $stmt->fetchObject(__CLASS__);
    }

    public function getAll($delete = 0)
    {
        $stmt = Core::db()->prepare("SELECT `id`, `name`, `surname`, `dni`, `genre`, `birthdate`, `address`, `cp`, `town`, `province`, `telephone`, `email`, `delete`
        FROM " . $this->__table . " WHERE `delete` = " . $delete);
        
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . "\\student");
    }

    public function addCourse($student_id, $data)
    {
        //Check if is valid student and course
        $course = new \App\Http\Models\course();
        if($student_data = $this->getById($student_id) && $course_data = $course->getById($data['course_id']))
        {
            $student_course = new \App\Http\Models\students_courses();
            
            if( !$student_course->hasCourseLevel($student_id, $data['course_id'], $data['level']) )
            {        
                $student_course->insert([   'student_id'=>$student_id, 
                                            'course_id'=>$data['course_id'],
                                            'level'=>$data['level'] 
                                        ] );
            }
        }
    }
}