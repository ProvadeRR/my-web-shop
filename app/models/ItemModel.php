<?php


namespace app\models;


use app\core\base\Model;
use R;
use app\core\Regestry;

class ItemModel extends Model
{
    public function getItems(){
        $items = R::getAll('SELECT categories.category_alias, categories.category,items.price,items.title_item,items.title_image,items.alias,items.avaibility FROM items INNER JOIN categories ON items.category_id = categories.id ');
      return $items;
    }
    public function search($word){
        $users = R::getAll('SELECT categories.category_alias,categories.category,items.price,items.title_item,items.title_image,items.alias,items.avaibility FROM items INNER JOIN categories ON items.category_id = categories.id WHERE items.title_item LIKE ?',["%{$word}%"]);
        return $users;
    }
    public function getCategory(){
        $category = R::findAll('categories');
        return $category;
    }
    public function getCategoryItems($category){
        $items = R::getAll('SELECT categories.category,items.price,items.title_item,items.title_image,items.alias,items.avaibility FROM `items`  INNER JOIN categories WHERE category_id = categories.id AND categories.category_alias = ?',[$category]);
        return $items;
    }
    public function init()
    {
        // TODO: Implement init() method.
    }
}