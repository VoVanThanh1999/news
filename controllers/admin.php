<?php 
include_once 'init.php';
class admin extends model_and_view_admin{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
    function index() {
        $this->view('index',"");
    }
    function UserGetAll() {
        $userDAO = new user_repository();
        $users = $userDAO->getAll();
        $this->view('UserGetAll',$users);
    }
    function deleteUser($iduser)
    {
        $userDao = new user_repository();
        return $userDao->deleteById($iduser);
    }
    function getUserById($id) {
        $userDAO = new user_repository();
        $user = $userDAO->getById($id);
        $this->view('UserEdit', $user);
    }
    function createrUser(){
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['pass_word'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $date_of_birth = $_POST['date_of_birth'];
        if(empty($email) && empty($password)&& empty($name)&& empty($gender)&&empty($date_of_birth) ){
            header('/news/admin/getUserById/'.$id.'?error=0');
        }
        else{
            $checkMail = "select * from users where email='$email'";
            $resultMail = $this->mysql->query($checkMail);
            $data = $resultMail->fetch_all();
            if(count($data) == 0){
                $query = "  UPDATE users
                        SET email='$email', pass_word=$password, name='$name',gender= $gender,date_of_birth='$date_of_birth'
                        WHERE id='$id'";
                $result = $this->mysql->query($query);
                echo  $gender = $_POST['gender'];
//                header('location: /news/admin/UserGetAll');
            }
            else{
                header('location: /news/admin/getUserById/'.$id.'?error=1');
            }
        }
    }
}