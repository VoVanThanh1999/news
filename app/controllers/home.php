<?php 
include_once '../app/init.php';

class home extends model_and_view_user {
    public function  index($user,$lever) {
        echo $user." ".$lever;
        $this->view('trangchu',"");
    }
    public  function pages(){
        echo  'pages';
    }
}