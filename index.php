<?php
define( 'BASE_PATH', __DIR__ . '/');    //Base directory, internal path server
require 'app/config.php';
require 'app/init.php';
require 'vendor/autoload.php';

//Match current Request URL
Route::dispatch();