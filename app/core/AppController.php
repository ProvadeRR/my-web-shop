<?php


namespace app\core;


use app\core\base\Controller;

class AppController extends Controller
{
    public function init()
    {
        // TODO: Implement init() method.
    }
    public function response($code,$status, $data = ''){
        $response = [
            'code' => $code,
            'status' => $status,
            'data' => $data,
        ];
        http_response_code($code);
        echo json_encode($response);
    }
    public function isAjax($data){
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
            if($this->isAjax()){
                header('Content-Type: json/application');
                if(!empty($users)){
                    $this->response(200,'OK' , $data);
                }
                else{
                    $this->response(404,'Not Found');
                }
            }
        }
        return false;
    }
}