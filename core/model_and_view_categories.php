<?php 
class model_and_view_categories {
    public function model($model){
        require_once 'app/models/'.$model.'.php';
        return new $model();
    }
    
    public function view($view,$data = []){
        $categories = $data;
        require_once 'public/views/users/'.$view.'.php';
    }
}