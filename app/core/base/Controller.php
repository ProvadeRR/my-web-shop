<?php


namespace app\core\base;


abstract class Controller
{
    protected $params;
    protected $view;
    public function __construct($params){
        $this->params = $params;
        $this->view = new View($params);
    }
    abstract function init();

}