<?php
namespace App\Http\Controllers;

use App\Core;
use App\Http\Controllers\Controller;


Class ErrorController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function index()
    {
        $_LANG = Core::get('lang');

        Core::smarty()->assign('_TITLE', $_LANG['Error']['page_title']);
        Core::smarty()->assign('BASE_URL', BASE_URL);
        Core::smarty()->display('error/404.tpl');
    }
}