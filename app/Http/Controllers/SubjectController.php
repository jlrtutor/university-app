<?php
namespace App\Http\Controllers;

use App\Core;
use App\Http\Controllers\Controller;
use App\Http\Models;

require BASE_PATH . '/app/Http/Models/subject.php';


Class SubjectController extends Controller
{   
    public function __construct() 
    {
        parent::__construct();
        $this->__module = 'subject';

        if(!Core::session()->get('user'))
            header('Location: ' . Core::router()->generate('login'));
        
        Core::smarty()->assign('__module', $this->__module);
        Core::smarty()->assign('_USER', Core::session()->get('user'));
        Core::smarty()->assign('_router', Core::router());    //For Sidebars Links
    }

    public function delete($id)
    {
        $subject = new \App\Http\Models\subject();
        $subject->delete($id);
        //lots of work here...

        $this->list();
    }

    public function update()
    {
        $subject = new \App\Http\Models\subject();
        $res = $subject->update($_POST);

        if(!$res)
        {
            Core::smarty()->assign('_ERRORS', $subject->__validations_errors);
            Core::smarty()->assign('_MESSAGE', 'UPDATE_KO');
            Core::smarty()->assign('_RS', $_POST);
            $this->edit($_POST['id']);
        } else {
            Core::smarty()->assign('_MESSAGE', 'UPDATE_OK');
            $this->edit($_POST['id']);
        }

    }

    public function ajaxToggleActive($id)
    {
        $subject = new \App\Http\Models\subject();
        $data = $subject->toggleActive($id);

        if(!$data){
            echo "0";
            return;
        }

        echo "1";
        return;       
    }

    public function edit($data)
    {        
        $subject = new \App\Http\Models\subject();
        if(is_array($data))
            $data = $subject->getById($data['id']);
        else
            $data = $subject->getById($data);

        if(!$data)
            Core::smarty()->assign('_MESSAGE', 'NOT_FOUND');

        Core::smarty()->assign('_RS', $data);

        $_LANG = Core::get('lang');
        
        Core::smarty()->assign(
            array(  '_PAGE_TITLE'           =>$_LANG['Subject']['edit_page_title'],
                    '_SECTION_TITLE'        =>$_LANG['Subject']['edit_section_title'],
                    '_SECTION_DESCRIPTION'  =>$_LANG['Subject']['edit_section_description'],
                    '_SECTION_MODULE'       =>$_LANG['Subject']['edit_section_module'],
                    '_SECTION_MODULE_URL'   =>Core::router()->generate('subjects'), //Link to subject list
                    '_SECTION_ACTIVITY'     =>$_LANG['Subject']['edit_section_activity'])
        );

        Core::smarty()->assign('__controller', 'add');
        Core::smarty()->assign('_section', 'subject.add.tpl');
        Core::smarty()->display('index.tpl');
    }

    public function insert()
    {
        $subject = new \App\Http\Models\subject();
        $id = $subject->insert($_POST);

        if($id){
            Core::smarty()->assign('_MESSAGE', 'INSERT_OK');// array('type'=>'success','text'=>'<i class="fa fa-check"></i> Asignatura insertada'));
            $this->edit($id);
        }else{
            Core::smarty()->assign('_MESSAGE', 'INSERT_KO');//array('type'=>'warning','text'=>'<i class="fa fa-warning"></i> Error al insertar. Verifique los datos'));
            Core::smarty()->assign('_ERRORS', $subject->__validations_errors);
            $this->add($_POST);
        }
    }

    public function list()
    {
        $subject = new \App\Http\Models\subject();

        Core::smarty()->assign('_RS', $subject->getAll());

        $_LANG = Core::get('lang');

        Core::smarty()->assign(
            array(  '_PAGE_TITLE'           =>$_LANG['Subject']['list_page_title'],
                    '_SECTION_TITLE'        =>$_LANG['Subject']['list_section_title'],
                    '_SECTION_DESCRIPTION'  =>$_LANG['Subject']['list_section_description'],
                    '_SECTION_MODULE'       =>$_LANG['Subject']['list_section_module'],
                    '_SECTION_MODULE_URL'   =>Core::router()->generate('subjects'), //Link to subjects list
                    '_SECTION_ACTIVITY'     =>$_LANG['Subject']['list_section_activity'] )
        );

        //Load section Subject > List
        Core::smarty()->assign('__controller', 'list');
        Core::smarty()->assign('_section', 'subject.list.tpl');
        Core::smarty()->display('index.tpl');
    }
    
    public function add($data = null)
    {
        $subject = new \App\Http\Models\subject();

        $_LANG = Core::get('lang');

        Core::smarty()->assign( 
            array(  '_PAGE_TITLE'           =>$_LANG['Subject']['add_page_title'],
                    '_SECTION_TITLE'        =>$_LANG['Subject']['add_section_title'],
                    '_SECTION_DESCRIPTION'  =>$_LANG['Subject']['add_section_description'],
                    '_SECTION_MODULE'       =>$_LANG['Subject']['add_section_module'],
                    '_SECTION_MODULE_URL'   =>Core::router()->generate('subjects'), //Link to subjects list
                    '_SECTION_ACTIVITY'     =>$_LANG['Subject']['add_section_activity'])
            );  
        Core::smarty()->assign('_RS', $data);
        //Load section Subject > Add
        Core::smarty()->assign('__controller', 'add');
        Core::smarty()->assign('_section', 'subject.add.tpl');
        Core::smarty()->display('index.tpl');
    }
}