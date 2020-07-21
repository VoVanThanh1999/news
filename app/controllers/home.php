<?php 
include_once '../app/init.php';

class home extends model_and_view_user {
    public function  index() {
        $this->view('trangchu',"data");
    }
    public  function pages(){
        echo  'pages';
    }
}