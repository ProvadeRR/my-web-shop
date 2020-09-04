<?php


namespace app\core;


class Router
{
    use TSingleton;
    private static $routes = [];
    private static $params = [];
    private static $url;

    private function __construct(){
        self::run();
    }
    private function getUrl(){
        self::$url = trim($_SERVER['REQUEST_URI'] , '/');
        return self::$url;
    }
    private function getRoutes(){
        $routes = require 'app/Settings/routes.php';
        foreach ($routes as $routes => $params){
            self::$routes[$routes] = $params;
        }
    }
    private function matches(){
        foreach (self::$routes as $route => $params){
            if(preg_match($route, self::$url, $data)){
                self::$params['controller'] =  $params['controller'];
                self::$params['action'] = $params['action'];
                foreach ($data as $key=> $value){
                    if(is_string($key)){
                        self::$params['data'][$key] = $value;
                    }
                }
                return true;
            }
        }
        return false;
    }
    private function run(){
        self::getUrl();
        self::getRoutes();
        if(self::matches()){
            $controllerPATH = CONTROLLERS . self::$params['controller'];
            if(class_exists($controllerPATH)){
                $action = self::$params['action'] . 'Action';
                if(method_exists($controllerPATH,$action)){
                    $controller = new $controllerPATH(self::$params);
                    $controller->$action();
                }
                else{
                    echo 'Метод не найден';
                }
            }
            else{
                echo 'Контроллер не существует';
            }
        }
        else{
            echo 'Ошибка 404';
        }
    }
}