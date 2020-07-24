<?php
//@author hieu hoang
include_once '../app/init.php';
class login extends model_and_view_login
{
    private $mysql;
    public function __construct(){
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
    function index()
    {
        $this->view('login', "");
    }
    function CheckLogin()
    {
        session_start();
        $email = $_POST['email'];
        $password = $_POST['pass_word'];
        if(empty($email) && empty($password)){
            header('location: login?error=0');
        }
        else {
            $sql_query = "select * from users where email='$email' and pass_word='$password'";
            $result = $this->mysql->query($sql_query);
            $data = $result->fetch_all();
            if (count($data) > 0) {
                $_SESSION['email'] = $data[0][2];
                $_SESSION['id'] = $data[0][0];
                $_SESSION['name'] = $data[0][1];
                header('location: /news/public/admin/index');
            } else {
                header('location: login?error=1');
            }
        }
    }
    function Logout(){
        session_start();
        $_SESSION['email']=null;
        $_SESSION['id'] = null;
        $_SESSION['name'] = null;
        header('location: /news/public/login/login');
    }
    function Register()
    {
        $this->view('Register', "");
    }
    function SubmitRegister(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['username'];
        $gender = $_POST['gender'];
        $date_of_birth = $_POST['date_of_birth'];
        $passwordrep = $_POST['passwordrep'];
        if(empty($email) && empty($password)&& empty($name)&& empty($gender)&&empty($date_of_birth) &&empty($passwordrep)){
            header('location: Register?error=0');
        }
        else{
            $checkMail = "select * from users where email='$email'";
            $resultMail = $this->mysql->query($checkMail);
            $data = $resultMail->fetch_all();
            if(count($data) == 0){
                if($password != $passwordrep){
                    header('location: Register?error=2');
                }
                else{
                $query = "INSERT INTO users(name,email,pass_word,gender,date_of_birth) VALUE('$name', '$email', '$password', '$gender', '$date_of_birth')";
                $result = $this->mysql->query($query);
                print_r($query);
                header('location: login');
                }
            }
            else{
                header('location: Register?error=1');
            }
        }
    }
    function ForgotPassword(){
        $this->view('ForgotPassword', "");
    }
    function SubmitForgotPass(){

    }
}