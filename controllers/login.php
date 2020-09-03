<?php
//@author hieu hoang
include_once 'init.php';
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

        $email = $_POST['email'];
        $password = $_POST['pass_word'];
        if(empty($email) && empty($password)){
            header('location: login?error=0');
        }
        else {
            $sql_query = "select * from users where email='$email' ";
            $result = $this->mysql->query($sql_query);
            $data = $result->fetch_all();
            session_start();
            if (count($data) > 0) {
                    if(password_verify($password, $data[0][3]))
                    {
                        $_SESSION['email'] = $data[0][2];
                        $_SESSION['id'] = $data[0][0];
                        $_SESSION['name'] = $data[0][1];
                        header('location: /news/admin/index');
                    }
                    else{
                        header('location: login?error=1');
                    }
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
        header('location: /news/login/login');
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
                $password = password_hash ($password,PASSWORD_DEFAULT);
//                echo $password;
                $query = "INSERT INTO users(name,email,pass_word,gender,date_of_birth) VALUE('$name', '$email', '$password', $gender, '$date_of_birth')";
                echo $query;
                $result = $this->mysql->query($query);
                    session_start();
                    if($_SESSION['id'] ==null){
                        header('location: login');
                    }
                    else{
                        header('location: /news/admin/UserGetAll');
                    }
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
    function forgotPass(){
        $email = $_POST['email'];
        $password = $_POST['pass_word'];
        $checkMail = "select * from users where email='$email'";
        $resultMail = $this->mysql->query($checkMail);
        $data = $resultMail->fetch_all();
        if (count($data) == 0) {
            if ($password != "") {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = "  UPDATE users
                        SET pass_word='$password'
                        WHERE email='$email'";
                $result = $this->mysql->query($query);
                header('location: login');
            }
        }
        else{

        }
    }
}