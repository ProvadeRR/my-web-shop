<?php


namespace app\core\base;


class View
{
    public $scripts;
   public function render($title = '',$view = '' , $layout = 'default',$vars = []){
        extract($vars);
        $view = VIEWS . $view . PHP;
        $layout = LAYOUT . $layout . PHP;
        if(is_file($layout)){
            if(is_file($view)){
                ob_start();
                require_once $view;
                $content = ob_get_clean();
                require_once $layout;
            }
            else{
                echo 'Вид не найден';
            }
        }
        else{
            echo 'Шаблона не найдено';
        }
   }
}