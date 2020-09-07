<?php


namespace app\controllers;


use app\core\AppController;
use app\core\base\Controller;
use app\models\ItemModel;

class RestApiController extends AppController
{
    public function __construct($params)
    {
        parent::__construct($params);
        header('Content-Type: application/json');
        $this->model = new ItemModel();
    }

    public function main_pageAction(){
        if(isset($_GET)){
           $items = $this->model->getItems();
           $this->response('200',$items);
        }
    }
    public function listCategoryAction(){
        if(isset($_GET)){
            $categories = $this->model->getCategory();
            $this->response('200',$categories);
        }
    }
}