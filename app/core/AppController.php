<?php


namespace app\core;


use app\core\base\Controller;

class AppController extends Controller
{
    protected $model;
    public function init()
    {
        // TODO: Implement init() method.
    }
    public function response($code, $data = ''){
        $response = [
            'code' => $code,
            'response' => $data,
        ];
        http_response_code($code);
        echo json_encode($response);
    }
}