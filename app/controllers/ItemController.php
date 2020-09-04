<?php


namespace app\controllers;


use app\core\AppController;
use app\models\ItemModel;

class ItemController extends AppController
{
    public function listCategoryAction(){
        $model = new ItemModel();
        $categories = $model->getCategory();
        $this->view->render('Категории','category/index','default', compact('categories'));
    }
    public function ItemsInCategoryAction(){
        $model = new ItemModel();
        $category = $this->params['data']['category'];
        $items_in_this_category = $model->getCategoryItems($category);
        $this->view->render($items_in_this_category[0]['category'],'category/thisCategory','default',$items_in_this_category);

    }
}