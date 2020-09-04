<?php


namespace app\core;


class Cache
{
    public $file = 'app/tmp/cache/';
    public function set($key,$data,$time = 60){
        $content['data'] = $data;
        $content['end_time'] = time() + $time;
        file_put_contents($this->file . md5($key) . '.txt' , serialize($content));
    }
    public function get($key){
        if(is_file($this->file . md5($key) . '.txt'))
        {
            $content = unserialize(file_get_contents($this->file . md5($key) . '.txt'));
            if (time() <= $content['end_time']) {
                return $content['data'];
            } else {
                return false;
            }
        }
        else{
            return false;
        }
    }
}