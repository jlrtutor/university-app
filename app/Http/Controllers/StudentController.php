<?php
namespace App\Http\Controllers;

use App\Core;
use App\Http\Controllers\Controller;
use App\Http\Models;

require BASE_PATH . '/app/Http/Models/student.php';

Class StudentController extends Controller
{    
    public function __construct() 
    {
        //parent::__construct();
        $this->__module = 'student';
        
        if(!$user = Core::session()->get('user'))
            header('Location: ' . Core::router()->generate('login'));
        
        Core::smarty()->assign('__module', $this->__module);
        Core::smarty()->assign('__controller', '');
        Core::smarty()->assign('_USER', $user);
        Core::smarty()->assign('_router', Core::router());    //For Sidebars Links                                                                                                                                                                                                                                                                                                                    
    }

    public function delete($id)
    {
        $student = new \App\Http\Models\student();
        $student->delete($id);
        //lots of work here, delete califications, subscriptions, etc..

        $this->list();
    }

    public function addStudentCourse($student_id, $course_id, $level)
    {
        //StudentSubjects
        $califications = new \App\Http\Models\students_subjects();
        $califications->insertData($student_id, $course_id, $level, $_POST['subject']);

        $this->studentCourse($student_id, $course_id, $level);
    }

    public function studentCourse($student_id, $course_id, $level)
    {
        //Student
        $student = new \App\Http\Models\student();
        $data = $student->getById($student_id);
        Core::smarty()->assign('_RS', $data);

        //Course
        $course = new \App\Http\Models\course();
        Core::smarty()->assign('_COURSES', $course->getAll());

        //Subjects
        $subject = new \App\Http\Models\subject();
        Core::smarty()->assign('_SUBJECTS', $subject->getByCourse($level));

        //StudentCourses
        $registration = new \App\Http\Models\students_courses();
        $data = $registration->getAllByStudentId($student_id);       
        Core::smarty()->assign('_STUDENT_REGISTRATION', $data);

        //StudentSubjects
        $califications = new \App\Http\Models\students_subjects();      
        Core::smarty()->assign('_CALIFICATIONS', $califications);

        $_LANG = Core::get('lang');

        Core::smarty()->assign(
            array(  
                '_STUDENT_ID'           =>$student_id,
                '_COURSE_ID'            =>$course_id,
                '_LEVEL'                =>$level,
                '_PAGE_TITLE'           =>$_LANG['Student']['studentCourse_page_title'],
                '_SECTION_TITLE'        =>$_LANG['Student']['studentCourse_section_title'],
                '_SECTION_DESCRIPTION'  =>$_LANG['Student']['studentCourse_section_description'],
                '_SECTION_MODULE'       =>$_LANG['Student']['studentCourse_section_module'],
                '_SECTION_MODULE_URL'   =>Core::router()->generate('students'), //Link a listado de alumnos
                '_SECTION_ACTIVITY'     =>$_LANG['Student']['studentCourse_section_activity'] )
        );

        Core::smarty()->assign('_section', 'student.suscriptions.tpl');
        Core::smarty()->display('index.tpl');
    }

    public function addCourse($id)
    {
        //Subscribe student to course
        $student = new \App\Http\Models\student();
        $res = $student->addCourse($id, $_POST);

        //Return to Student-Courses section
        $this->course($id);
    }

    public function course($id)
    {
        $student = new \App\Http\Models\student();
        $data = $student->getById($id);

        if(!$data)
        {
            Core::smarty()->assign('_MESSAGE', 'NOT_FOUND');
        }

        Core::smarty()->assign('_RS', $data);

        //Course
        $course = new \App\Http\Models\course();
        Core::smarty()->assign('_COURSES', $course->getAll());
        
        //StudentCourses
        $registration = new \App\Http\Models\students_courses();
        $data = $registration->getAllByStudentId($id);
       
        Core::smarty()->assign('_STUDENT_REGISTRATION', $data);

        //StudentSubjects
        $califications = new \App\Http\Models\students_subjects();      
        Core::smarty()->assign('_CALIFICATIONS', $califications);

        $_LANG = Core::get('lang');

        Core::smarty()->assign(
            array(  
            '_STUDENT_ID'=>$id,
            '_PAGE_TITLE'           =>$_LANG['Student']['course_page_title'],
            '_SECTION_TITLE'        =>$_LANG['Student']['course_section_title'],
            '_SECTION_DESCRIPTION'  =>$_LANG['Student']['course_section_description'],
            '_SECTION_MODULE'       =>$_LANG['Student']['course_section_module'],
            '_SECTION_MODULE_URL'   =>Core::router()->generate('students'), //Link a listado de alumnos
            '_SECTION_ACTIVITY'     =>$_LANG['Student']['course_section_activity'])
        );

        Core::smarty()->assign('_section', 'student.course.tpl');
        Core::smarty()->display('index.tpl');
    }

    public function update()
    {
        $student = new \App\Http\Models\student();
        $res = $student->update($_POST);

        if($res){
            Core::smarty()->assign('_MESSAGE', 'UPDATE_OK');
            $this->edit($_POST['id']);
        }else{
            Core::smarty()->assign( 
                array(  '_ERRORS', $student->validations_errors,
                        '_MESSAGE', 'UPDATE_KO') );
            $this->edit($_POST);
        }
    }

    /**
     * $data: $id|$_POST data
     */
    public function edit($data)
    {        
        $student = new \App\Http\Models\student();
        if(!is_array($data))
        {
            $data = $student->getById($data);
        }
        
        if(!$data)
            Core::smarty()->assign('_MESSAGE', 'NOT_FOUND');

        Core::smarty()->assign('_RS', $data);
        
        $_LANG = Core::get('lang');

        Core::smarty()->assign(
            array(  '_PAGE_TITLE'           =>$_LANG['Student']['edit_page_title'],
                    '_SECTION_TITLE'        =>$_LANG['Student']['edit_section_title'],
                    '_SECTION_DESCRIPTION'  =>$_LANG['Student']['edit_section_description'],
                    '_SECTION_MODULE'       =>$_LANG['Student']['edit_section_module'],
                    '_SECTION_MODULE_URL'   =>Core::router()->generate('students'), //Link a listado de alumnos
                    '_SECTION_ACTIVITY'     =>$_LANG['Student']['edit_section_activity'])
        );

        Core::smarty()->assign('_section', 'student.add.tpl');
        Core::smarty()->display('index.tpl');
    }

    public function insert()
    {
        $student = new \App\Http\Models\student();
        $id = $student->insert($_POST);

        if($id){
            Core::smarty()->assign('_MESSAGE', 'INSERT_OK');
            $this->edit($id);
        }else{
            Core::smarty()->assign('_MESSAGE', 'INSERT_KO');
            Core::smarty()->assign('_ERRORS', $student->__validations_errors);
            $this->add((object)$_POST);
        }

    }

    public function list()
    {
        $student = new \App\Http\Models\student();

        $_LANG = Core::get('lang');

        Core::smarty()->assign(
            array(  '_PAGE_TITLE'           =>$_LANG['Student']['list_page_title'],
                    '_SECTION_TITLE'        =>$_LANG['Student']['list_section_title'],
                    '_SECTION_DESCRIPTION'  =>$_LANG['Student']['list_section_description'],
                    '_SECTION_MODULE'       =>$_LANG['Student']['list_section_module'],
                    '_SECTION_MODULE_URL'   =>Core::router()->generate('students'), //Link a listado de alumnos
                    '_SECTION_ACTIVITY'     =>$_LANG['Student']['list_section_activity'],
                    '_RS'=>$student->getAll() )
        );

        Core::smarty()->assign('__controller', 'list');
        
        //Load section Students > List
        Core::smarty()->assign('_section', 'student.list.tpl');
        Core::smarty()->display('index.tpl');
    }
    
    public function add($data = null)
    {
        $student = new \App\Http\Models\student();

        $_LANG = Core::get('lang');

        Core::smarty()->assign( 
            array(  '_RS'=>$data,
                    '_PAGE_TITLE'           =>$_LANG['Student']['add_page_title'],
                    '_SECTION_TITLE'        =>$_LANG['Student']['add_section_title'],
                    '_SECTION_DESCRIPTION'  =>$_LANG['Student']['add_section_description'],
                    '_SECTION_MODULE'       =>$_LANG['Student']['add_section_module'],
                    '_SECTION_MODULE_URL'   =>Core::router()->generate('students'), //Link a listado de alumnos
                    '_SECTION_ACTIVITY'     =>$_LANG['Student']['add_section_activity'])
            );

        //Load section Student > Add
        Core::smarty()->assign('_section', 'student.add.tpl');
        Core::smarty()->display('index.tpl');
    }
}