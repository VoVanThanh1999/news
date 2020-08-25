<?php
include_once 'init.php';

class admin extends model_and_view_admin
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }

    function index()
    {
        $this->view('index', "");
    }

    function UserGetAll()
    {
        $userDAO = new user_repository();
        $users = $userDAO->getAll();
        $this->view('UserGetAll', $users);
    }

    function deleteUser($iduser)
    {
        $userDao = new user_repository();
        return $userDao->deleteById($iduser);
    }

    function getUserById($id)
    {
        $userDAO = new user_repository();
        $user = $userDAO->getById($id);
        $this->view('UserEdit', $user);
    }

    function createrUser()
    {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['pass_word'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $date_of_birth = $_POST['date_of_birth'];
        if (empty($email) && empty($password) && empty($name) && empty($gender) && empty($date_of_birth)) {
            header('/news/admin/getUserById/' . $id . '?error=0');
        } else {
            $checkMail = "select * from users where email='$email'";
            $resultMail = $this->mysql->query($checkMail);
            $data = $resultMail->fetch_all();
            if (count($data) == 0) {
                $query = "  UPDATE users
                        SET email='$email', pass_word=$password, name='$name',gender= $gender,date_of_birth='$date_of_birth'
                        WHERE id='$id'";
                $result = $this->mysql->query($query);
                header('location: /news/admin/UserGetAll');
            } else {
                header('location: /news/admin/getUserById/' . $id . '?error=1');
            }
        }
    }

    function getAllNewsCate()
    {
        $newsCateDAO = new categories_repository();
        $category = $newsCateDAO->getAll();
        $this->view('NewsCateGetAll', $category);
    }

    function deleteNewsCate($id)
    {
        $newsCateDAO = new categories_repository();
        return $newsCateDAO->deleteById($id);
    }

    function getNewsCateById($id)
    {
        $newsCateDAO = new categories_repository();
        $category = $newsCateDAO->getById($id);
        $this->view('NewsCateEdit', $category);
    }

    function updateNewsCate()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $tag = $_POST['tag'];
        $description = $_POST['description'];
        $icon = $_POST['icon'];
        $ab=new Abtract();
        $slug = $ab->to_slug($_POST['slug']);
        $active = $_POST['active'];
        if (empty($name) && empty($tag) && empty($description) && empty($slug)) {
            header('location:/news/admin/getNewsCateById/'.$id.'?error=0');
        } else {
            $newsCateDAO = new categories_repository();
            $category = $newsCateDAO->update(new Categories($id, $name, $tag, $description, $icon, $slug, 0));
            header('location: /news/admin/getAllNewsCate');
        }
    }

    function createrViewsCate()
    {
        $this->view('NewsCateAdd', "");
    }

    function createrNewsCate()
    {
        $name = $_POST['name'];
        $tag = $_POST['tag'];
        $description = $_POST['description'];
        $icon = $_POST['icon'];
        $ab=new Abtract();
        $slug = $ab->to_slug($_POST['slug']);
        if (empty($name) && empty($tag) && empty($description) && empty($slug)) {
            header('location:/news/admin/createrViewsCate?error=0');
        } else {
            $newsCateDAO = new categories_repository();
            $newsCateDAO->addCategories(new Categories("",$name,$tag,$description,$icon,$slug,0));
            header('location: /news/admin/getAllNewsCate');
        }
    }

    function ContactGetAll(){
        $contactsDAO = new contacts_repository();
        $contacts = $contactsDAO->getAll();
        $this->view('NewsCateGetAll', $contacts);
    }
}