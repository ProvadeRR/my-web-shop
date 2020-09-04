<?php


namespace app\core;


class Regestry
{
    use TSingleton;
    static public $objects = [];
    protected function __construct(){
        $config = require_once 'app/Settings/config.php';
        foreach ($config['autoload'] as $name => $object){
            self::$objects[$name] = new $object;
        }
    }
    public function __get($name){
        if(isset(self::$objects[$name])){
            return self::$objects[$name];
        }
    }
    public function __set($name,$value){
        if(!isset(self::$objects[$name])){
            self::$objects[$name] = $value;
        }
    }

}