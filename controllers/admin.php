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
        $flag = false;
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['pass_word'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $date_of_birth = $_POST['date_of_birth'];
        if ($flag) {
            if($id == ""){
                $post_sv->createPost(new posts("",$category_id,$title,$intro,$content,$image,$tag,$description,"",$slug,0));
                header('location: ./getAll');
            }
            else{
                $post_sv->createPost(new posts($id,$category_id,$title,$intro,$content,$image,$tag,$description,"",$slug,0));
                header('location: ./getAll');
            }
        }else{
            echo "bạn phải upload ảnh";
        }
    }
}