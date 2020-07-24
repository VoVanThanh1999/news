<?php
//@author hieu hoang
include_once '../app/init.php';
class user_repository{
    private $mysql;
    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
    function Register(users $users){

    }
}