<?php 
class model_and_view_user {
    public function model($model){
        require_once '../models/'.$model.'.php';
        return new $model();
    }
    
    public function view($view,$data = []){
        $datas = $data;
        require_once 'public/views/users/'.$view.'.php';
    }
}