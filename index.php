<?php


use app\core\Router;
use app\core\Regestry;

session_start();

define('CONTROLLERS' , 'app\\controllers\\');
define('BASE' , 'app\\core\\base\\');
define('MODELS', 'app\\models\\');
define('LAYOUT' , 'app/views/layouts/');
define('VIEWS', 'app/views/');
define('LIBS', 'app/libs/');
define('SETTINGS', 'app/Settings/');
define('PHP' , '.php');

spl_autoload_register(function($class){
   $path = str_replace('\\', '/' , $class . PHP);
   if(is_file($path))
   {
       require_once $path;
   }
});
Router::instance();