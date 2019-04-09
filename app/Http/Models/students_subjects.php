<?php
namespace App\Http\Models;
require_once __DIR__ . '/Model.php';

use App\Core;


Class students_subjects extends Model
{
    public function __construct()
    {
        parent::__construct('students_subjects');

        $this->field('id', 'integer', ['PK'=>true, 'validate'=>false] );
        $this->field('student_id', 'integer', ['FK'=>true]);
        $this->field('subject_id', 'integer', ['FK'=>true]);
        $this->field('course_id', 'integer', ['FK'=>true]);
        $this->field('level', 'integer');
        $this->field('calification', 'float', ['range'=>[0,10]]);
    }

    public function getApprovedSubjects($student_id, $course_id, $level)
    {
        $stmt = Core::db()->prepare("SELECT COUNT(*) as `total` FROM " . $this->__table . "
        WHERE `student_id` = :student_id AND `course_id` = :course_id AND `level` = :level
        AND `calification` >= 5");
        $stmt->execute(['student_id'=>$student_id,
                        'course_id'=>$course_id,
                        'level'=>$level]);
        return $stmt->fetchObject(__CLASS__);
    }

    public function getAverageCalification($student_id, $course_id, $level)
    {
        $stmt = Core::db()->prepare("SELECT AVG(`calification`) as `avg` FROM " . $this->__table . "
        WHERE `student_id` = :student_id AND `course_id` = :course_id AND `level` = :level");
        $stmt->execute(['student_id'=>$student_id,
                        'course_id'=>$course_id,
                        'level'=>$level]);
        return $stmt->fetchObject(__CLASS__);
    }

    public function getNumSubjects($student_id, $course_id, $level)
    {
        $stmt = Core::db()->prepare("SELECT COUNT(*) as `total` FROM " . $this->__table . "
        WHERE `student_id` = :student_id AND `course_id` = :course_id AND `level` = :level");
        $stmt->execute(['student_id'=>$student_id,
                        'course_id'=>$course_id,
                        'level'=>$level]);
        return $stmt->fetchObject(__CLASS__);
    }

    public function getAll($student_id, $course_id, $level)
    {
        $stmt = Core::db()->prepare("SELECT `id`, `student_id`, `level`, `course_id`, `calification`, `date_of_creation` FROM " . $this->__table . " WHERE `student_id` = :id");
        $stmt->execute(['id'=>$id]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . "\\students_subjects");
    }

    public function getCalification($student_id, $subject_id, $course_id, $level)
    {
        $stmt = Core::db()->prepare("SELECT `calification`
        FROM " . $this->__table . "
        WHERE student_id = :student_id AND subject_id = :subject_id AND course_id = :course_id AND level = :level");

        $stmt->execute([
                        'student_id'=>$student_id,
                        'subject_id'=>$subject_id,
                        'course_id'=>$course_id,
                        'level'=>$level
                        ]);
        return $stmt->fetchObject(__CLASS__);
    }

    public function getData($student_id, $course_id, $level)
    {
        $stmt = Core::db()->prepare("SELECT `id`, `student_id`, `subject_id`, `level`, `course_id`, `calification`, `date_of_creation`
        FROM " . $this->__table . "
        WHERE student_id = :student_id AND course_id = :course_id AND level = :level");

        $stmt->execute([
                        'student_id'=>$student_id,
                        'course_id'=>$course_id,
                        'level'=>$level
                        ]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . "\\students_subjects");
    }

    public function insertData($student_id, $course_id, $level, $data)
    {
        $stmt = Core::db()->prepare('DELETE FROM ' . $this->__table . ' 
        WHERE student_id = :student_id AND course_id = :course_id AND level = :level');
        $stmt->execute(array(
            'student_id'=>$student_id,
            'course_id'=>$course_id,
            'level'=>$level
        ));

        foreach($data as $subject_id=>$calification)
        {
            parent::insert([
                'student_id' => $student_id,
                'subject_id' => $subject_id,
                'course_id' => $course_id,
                'level' => $level,
                'calification' => ($calification)?$calification:NULL
            ]);
        }
        
    }

}