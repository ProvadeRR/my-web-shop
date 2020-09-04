<?php


namespace app\controllers;


use app\core\AppController;
use app\models\ItemModel;


class MainController extends AppController
{

    public function indexAction(){
        $model = new ItemModel();
        if(isset($_POST['search'])){
            $items = $model->search($_POST['search']);
        }
        else{
            $items = $model->getItems();
        }
        $this->view->render('Главная', 'main/index', 'default' , compact('items'));

    }

}