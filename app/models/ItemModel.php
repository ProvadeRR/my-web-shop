<?php


namespace app\models;


use app\core\base\Model;
use R;
use app\core\Regestry;

class ItemModel extends Model
{
    public function getItems(){
        $items = R::getAll('SELECT categories.category_alias, categories.category,items.id , items.price,items.title_item,items.title_image,items.alias,items.avaibility FROM items INNER JOIN categories ON items.category_id = categories.id ');
      return $items;
    }
    public function search($word){
        $result = R::getAll('SELECT categories.category_alias,categories.category,items.id,items.price,items.title_item,items.title_image,items.alias,items.avaibility FROM items INNER JOIN categories ON items.category_id = categories.id WHERE items.title_item LIKE ?',["%{$word}%"]);
        return $result;
    }
    public function getCategory(){
        $category = R::findAll('categories');
        return $category;
    }
    public function getCategoryItems($category){
        $items = R::getAll('SELECT categories.category,items.price,items.id,items.title_item,items.title_image,items.alias,items.avaibility FROM `items`  INNER JOIN categories WHERE category_id = categories.id AND categories.category_alias = ?',[$category]);
        return $items;
    }
    public function getItemByAlias($alias){
        $items = R::getAll('SELECT categories.category,items.price,items.description,items.id,items.title_item,items.title_image,items.alias,items.avaibility FROM `items`  INNER JOIN categories WHERE category_id = categories.id AND items.alias = ?',[$alias]);
        return $items;
    }
    public function searchbyID($id){
        $items = R::getAll('SELECT categories.category,items.price,items.id,items.title_item,items.title_image,items.alias,items.avaibility FROM `items`  INNER JOIN categories WHERE category_id = categories.id AND items.id = ?',[$id]);
        return $items;
    }
    public function createOrder($phone,$email,$city,$branch,$id){
        $order = R::dispense('orders');
        $order->phone = $phone;
        $order->email = $email;
        $order->city = $city;
        $order->branch=$branch;
        $order->item_id=$id;
        if(R::store($order) != false){
            return true;
        }
        else{
            return false;
        }
    }

    public function init()
    {
        // TODO: Implement init() method.
    }
}