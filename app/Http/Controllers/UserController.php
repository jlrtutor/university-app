<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


Class UserController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function index()
    {
        if(!$this->session->get('user'))
            header('Location: ' . $this->router->generate('login'));

        $this->smarty->assign('_USER', $session->get('user'));
        $this->smarty->display('index.tpl');
    }
}