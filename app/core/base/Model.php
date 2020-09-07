<?php


namespace app\core\base;
use app\core\Regestry;
use R;

abstract class Model
{
    public $app;
    public function __construct(){
        require_once LIBS . 'rb.php';
        require_once SETTINGS . 'database' . PHP;
        R::setup('mysql:host='.HOST.';dbname='.DB_NAME .';charset='.CHARSET, USER,PASSWORD);
    }
    abstract function init();
}