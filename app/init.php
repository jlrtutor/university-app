<?php
/******************************************************************************
 * Required files
 *****************************************************************************/
require_once BASE_PATH . 'app/Http/helpers.php';
require_once BASE_PATH . 'app/core.php';
require_once BASE_PATH . 'vendor/smarty/smarty/libs/bootstrap.php';
require_once BASE_PATH . 'vendor/josantonius/session/src/Session.php';
require_once BASE_PATH . 'vendor/altorouter/altorouter/AltoRouter.php';
//Lang file
require_once BASE_PATH . 'app/public/lang/' . LANG . '.php';
\App\Core::set('lang', $_LANG);

/******************************************************************************
 * Init Database connection
 *****************************************************************************/
try {
    $dsn = DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    $dbh = new PDO($dsn, DB_USER, DB_PASSWORD);
    $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die( $e->getMessage() );
}
\App\Core::set('db', $dbh);


/******************************************************************************
 * Init Smarty configuration
 *****************************************************************************/
$smarty = new Smarty();
$smarty->setTemplateDir(SMARTY_TEMPLATE_PATH . 'templates/');
$smarty->setCompileDir(SMARTY_TEMPLATE_PATH . 'templates_c/');
$smarty->setConfigDir(SMARTY_TEMPLATE_PATH . 'configs/');
$smarty->setCacheDir(SMARTY_TEMPLATE_PATH . 'cache/');
//Assign paths
$smarty->assign('_BASE_URL', BASE_URL);
$smarty->assign('_TEMPLATE_DIR_URL', SMARTY_TEMPLATE_BASE_URL);
$smarty->assign('_TEMPLATE_VIEWS_URL', VIEWS_BASE_URL);
//Set Language for use in templates
$smarty->assign('_LANG_CODE', LANG); //Lang code
\App\Core::set('lang', $_LANG);
$smarty->assign('_LANG', $_LANG);   //array of words
//Init
\App\Core::set('smarty', $smarty);


/******************************************************************************
 * Init Session
 *****************************************************************************/
$_session = new Josantonius\Session\Session();
$_session->init();
\App\Core::set('session', $_session);


/******************************************************************************
 * Init Routes
 *****************************************************************************/
require_once BASE_PATH . '/app/Http/routes.php';
//\App\Core::set('router', new AltoRouter($_app_routes));
\App\Core::set('router', new AltoRouter());
\App\Core::get('router')->setBasePath(BASE_URL);
\App\Core::get('router')->addRoutes($_app_routes);


/******************************************************************************
 * Basic Dispatch Route class
 *****************************************************************************/
Class Route
{
    public static function dispatch() 
    {
        $match = \App\Core::get('router')->match();
        
        // call closure or throw 404 status
        if($match)
        {
            list($class_name, $method_name) = explode("#", $match['target']);

            if( class_exists($class_name))
            {
                $class = new $class_name();
                call_user_func_array( array($class, $method_name), $match['params'] );
            } else {
                die('Class not found: ' . $class_name);
            }
            
        } else {
            // no route was matched
            header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
            header( 'Location: '.BASE_URL.'page-not-found');
        }
        
    }
}