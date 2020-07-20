<?php
include_once '../app/init.php';
class newscate extends model_and_view_newscate {
    function index() {
        $this->view('index',"data");
    }
}