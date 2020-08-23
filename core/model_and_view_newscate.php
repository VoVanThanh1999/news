<?php
class model_and_view_newscate
{
    public function model($model){
        require_once 'app/models/'.$model.'.php';
        return new $model();
    }

    public function view($view,$data = []){
        $datas = $data;
        require_once 'public/views/newscate/'.$view.'.php';
    }
}