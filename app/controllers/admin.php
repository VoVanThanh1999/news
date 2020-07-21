<?php 
include_once '../app/init.php';
class admin extends model_and_view_admin{
    function index() {
        $this->view('index',"");
    }
}