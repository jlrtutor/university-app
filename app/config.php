<?php
define( 'BASE_URL', '/university-app/');  //WEB directory, external path url
//define( 'BASE_URL', '/');

define( 'SMARTY_TEMPLATE_PATH',     BASE_PATH . 'app/public/views/' );
define( 'SMARTY_TEMPLATE_BASE_URL', BASE_URL . 'app/public/views/templates/' );
define( 'VIEWS_BASE_URL',           BASE_URL . 'app/public/views/' );
define( 'DEVELOPMENT_MODE',         true ); //true (dev)|false (prod)

define( 'LANG', 'es-ES');   //es-ES|en-EN

define( 'KEY_SALT', 'vpesZ4-_%[O[KrFO&Jc2-PD{,.cXwbQCHxasjot?x?X+f)xXQVn"l0d3(`ri6x.');

define( 'DATE_FORMAT_WEB', 'd/m/Y');
define( 'DATE_FORMAT_DB', 'Y-m-d');

/**
 * DEVELOPMENT MODE
 */
if( DEVELOPMENT_MODE ){
    define( 'DB_DRIVER',    'mysql' );
    define( 'DB_HOST',      'localhost' );
    define( 'DB_NAME',      'university' );
    define( 'DB_USER',      'root' );
    define( 'DB_PASSWORD',  '' );
    define( 'DB_CHARSET',   'utf8' );
}else{
    define( 'DB_DRIVER',    'mysql' );
    define( 'DB_HOST',      'localhost' );
    define( 'DB_NAME',      'university' );
    define( 'DB_USER',      'production-user' );
    define( 'DB_PASSWORD',  'production-password' );
    define( 'DB_CHARSET',   'utf8' );
}