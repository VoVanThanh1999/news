<?php


class model_and_view_login
{
    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }
    public function view($view, $data){
        $datas = $data;
        require_once '../public/views/login/'.$view.'.php';
    }
}