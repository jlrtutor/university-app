<?php
namespace App\Http\Models;
require_once __DIR__ . '/Model.php';

use App\Core;


Class students_courses extends Model
{
    public function __construct()
    {
        parent::__construct('students_courses');

        $this->field('id', 'integer', ['PK'=>true, 'validate'=>false] );
        $this->field('student_id', 'integer', ['FK'=>true]);
        $this->field('course_id', 'integer', ['FK'=>true]);
        $this->field('level', 'integer');
        $this->field('date_of_creation', 'date', [ 'validate'=>false,
                                                    'required'=>false, 
                                                    'default'=>date('Y-m-d')]);
    }

    public function getAllByStudentId($id)
    {
        $stmt = Core::db()->prepare("SELECT `id`, `student_id`, `level`, `course_id`, `date_of_creation` FROM " . $this->__table . " WHERE `student_id` = :id");
        $stmt->execute(['id'=>$id]);
        $res = $stmt->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . "\\students_courses");
        return $res;
    }

    public function getNumStudents($course_id)
    {
        $stmt = Core::db()->prepare("SELECT COUNT(*) as `total` FROM " . $this->__table . "
        WHERE `course_id` = :course_id");
        $stmt->execute(['course_id'=>$course_id]);
        return $stmt->fetchObject(__CLASS__);
    }

    public function hasCourseLevel($student_id, $course_id, $level)
    {
        $stmt = Core::db()->prepare("SELECT 1 FROM " . $this->__table . " 
        WHERE `student_id` = :student_id AND `course_id` = :course_id AND `level` = :level");

        $stmt->execute( ['student_id'=>$student_id,
                         'course_id'=>$course_id,
                         'level'=>$level]);
        return $stmt->fetchObject(__CLASS__);
    }
}