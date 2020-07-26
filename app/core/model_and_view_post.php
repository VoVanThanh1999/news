<?php
class model_and_view_post
{
    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }

    public function view($view,$data = []){
        $data = $data;
        require_once '../public/views/post/'.$view.'.php';
    }
}