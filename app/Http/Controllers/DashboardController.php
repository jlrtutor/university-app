<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;


Class DashboardController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function index()
    {
        if(!$user = $this->session->get('user'))
        {
            header('Location: ' . $this->router->generate('login'));
        }

        $this->smarty->assign('__module', '');
        $this->smarty->assign('__controller', '');
        $this->smarty->assign('_router', $this->router);    //For generate Sidebars URLs
        $this->smarty->assign('_USER', $user);
        $this->smarty->display('index.tpl');
    }
}