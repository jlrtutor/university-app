<?php
namespace App\Http\Controllers;

use App\Core;
use App\Http\Controllers\Controller;
use Josantonius\Session\Session;
use App\Http\Models;

require BASE_PATH . '/app/Http/Models/user.php';

Class LoginController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function index($error_msg = null)
    {
        Core::smarty()->assign('_BODY_CLASS', 'login-page');
        Core::smarty()->assign('_ERROR_MSG', $error_msg);
        Core::smarty()->display('login.tpl');
    }

    public function checkLogin()
    {
        $user = new \App\Http\Models\user();

        if( $user_data = $user->checkLogin($_POST['email'], $_POST['password']) )
        {
            Core::session()->set('user', $user_data);
            
            //Login OK, so redirect to Dashboard
            header('Location: ' . Core::router()->generate('home'));
        }
        
        //Output error message and show login form
        $this->index( Core::lang()['Login']['error_login_validation'] );
    }

    public function logout()
    {
        Core::session()->regenerate();
        Core::session()->destroy('user');

        header('Location: ' . Core::router()->generate('home'));
    }
}