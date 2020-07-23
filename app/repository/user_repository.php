<?php
class user_repository{
    private $mysql;
    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
    function login($email, $pass)
    {
        $query = "SELECT * FROM users where email = $email and pass_word = $pass";
        $result = $this->mysql->query($query);
        if($result == true){

        }

        return $data;
    }
}