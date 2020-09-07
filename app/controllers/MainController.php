<?php


namespace app\controllers;


use app\core\AppController;
use app\models\ItemModel;

class MainController extends AppController
{
    public function __construct($params)
    {
        parent::__construct($params);
        $this->model = new ItemModel();
    }

    public function indexAction(){
        $this->view->render('Главная страница','shop/main','default');
    }
    public function categoriesAction(){
        $this->view->render('Категории','shop/categories','default');
    }
    public function oneCategoryAction(){
        $category = $this->params['data']['category'];
        $items = $this->model->getCategoryItems($category);
        $this->view->render($items[0]['category'],'shop/ItemsInCategory','default',compact('items'));
    }
    public function searchAction(){
        $word = $_GET['search'];
        $items = $this->model->search($word);
        $this->view->render('Результаты поиска','shop/search','default',compact('items'));
    }
    public function OneItemAction(){
        $tovar = explode('/',$_SERVER['REQUEST_URI']);
        $tovar = $tovar[2];
        $item = $this->model->getItemByAlias($tovar)[0];
        $this->view->render($item['title_item'],'shop/OneItem','default',compact('item'));
    }
    public function buyProductAction(){
        $id = $_POST['id'];
        $item = $this->model->searchbyID($id)[0];
        $this->view->render('Покупка','shop/buy' , 'default',$item);
    }
    public function goBuyAction(){
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $branch = $_POST['branch'];
        $id = $_POST['id'];
        $name = $_POST['name'];
        if($this->model->createOrder($phone,$email,$city,$branch,$id,$name)){
            header('location: http://my-shop/');
            $_SESSION['message'] = 'Вы успешно совершили покупку, менеджер в ближайшее время свяжется с вами';
        };
    }
}