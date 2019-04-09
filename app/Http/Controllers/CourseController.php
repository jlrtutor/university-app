<?php
namespace App\Http\Controllers;

use App\Core;
use App\Http\Controllers\Controller;
use App\Http\Models;

require BASE_PATH . '/app/Http/Models/course.php';


Class CourseController extends Controller
{   
    public function __construct() 
    {
        parent::__construct();
        $this->__module = 'course';

        if(!$user = Core::session()->get('user'))
            header('Location: ' . Core::router()->generate('login'));
        
        Core::smarty()->assign('__module', $this->__module);
        Core::smarty()->assign('_USER', $user);
        Core::smarty()->assign('_router', Core::router());    //For Sidebars Links
    }

    public function delete($id)
    {
        $course = new \App\Http\Models\course();
        $res = $course->delete($id);

        if($res)
            Core::smarty()->assign('_MESSAGE', 'DELETE_OK');
        else
            Core::smarty()->assign('_MESSAGE', 'DELETE_KO');
           
        $this->add();
    }

    public function update()
    {
        $course = new \App\Http\Models\course();
        $res = $course->update($_POST);

        if($res)
            Core::smarty()->assign('_MESSAGE', 'UPDATE_OK');
        else
            Core::smarty()->assign('_MESSAGE', 'UPDATE_KO');
           
        $this->edit($_POST['id']);
    }

    public function edit($id)
    {    
        $students_courses = new \App\Http\Models\students_courses();
        Core::smarty()->assign('_STUDENTS', $students_courses);
    
        $course = new \App\Http\Models\course();
        $data = $course->getById($id);

        if(!$data)
            Core::smarty()->assign('_MESSAGE', 'NOT_FOUND');

        Core::smarty()->assign('_RS', $data);
        Core::smarty()->assign('courses', $course->getAll());
        Core::smarty()->assign('form_action', Core::router()->generate('course-update', ['id'=>$id]));
        
        $_LANG = Core::get('lang');

        Core::smarty()->assign(
            array(  '_PAGE_TITLE'           =>$_LANG['Course']['edit_page_title'],
                    '_SECTION_TITLE'        =>$_LANG['Course']['edit_section_title'],
                    '_SECTION_DESCRIPTION'  =>$_LANG['Course']['edit_section_description'],
                    '_SECTION_MODULE'       =>$_LANG['Course']['edit_section_module'],
                    '_SECTION_MODULE_URL'   =>Core::router()->generate('course-add'), //Link to students list
                    '_SECTION_ACTIVITY'     =>$_LANG['Course']['edit_section_activity'])
        );
        Core::smarty()->assign('__controller', 'add');
        Core::smarty()->assign('_section', 'course.add.tpl');
        Core::smarty()->display('index.tpl');
    }
    
    public function insert()
    {
        $course = new \App\Http\Models\course();
        $id = $course->insert($_POST);

        if($id){
            Core::smarty()->assign('_MESSAGE', 'INSERT_OK');
            $this->edit($id);
        }else{
            Core::smarty()->assign('_MESSAGE', 'INSERT_KO');
            Core::smarty()->assign('_ERRORS', $course->__validations_errors);
            $this->add($_POST);
        }
    }

    public function add($data = null)
    {
        $students_courses = new \App\Http\Models\students_courses();
        Core::smarty()->assign('_STUDENTS', $students_courses);

        $course = new \App\Http\Models\course();

        $_LANG = Core::get('lang');

        Core::smarty()->assign( 
            array(  '_PAGE_TITLE'           =>$_LANG['Course']['add_page_title'],
                    '_SECTION_TITLE'        =>$_LANG['Course']['add_section_title'],
                    '_SECTION_DESCRIPTION'  =>$_LANG['Course']['add_section_description'],
                    '_SECTION_MODULE'       =>$_LANG['Course']['add_section_module'],
                    '_SECTION_MODULE_URL'   =>Core::router()->generate('course-add'), //Link to courses form/list
                    '_SECTION_ACTIVITY'     =>$_LANG['Course']['add_section_activity'] )
            );  
        Core::smarty()->assign('_RS', $data);
        Core::smarty()->assign('courses', $course->getAll());
        Core::smarty()->assign('form_action', Core::router()->generate('course-add-post'));
        //Load section Course > Add
        Core::smarty()->assign('__controller', 'add');
        Core::smarty()->assign('_section', 'course.add.tpl');
        Core::smarty()->display('index.tpl');
    }
}