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
        $ab = new Abtract();
        $slug = $ab->to_slug($_POST['slug']);
        if (isset($_POST['active'])) $active = 1;
        else  $active = 0;
        if (empty($name) && empty($tag) && empty($description) && empty($slug)) {
            header('location:/news/admin/getNewsCateById/' . $id . '?error=0');
        } else {
            $newsCateDAO = new categories_repository();
            $category = $newsCateDAO->update(new Categories($id, $name, $tag, $description, $icon, $slug, $active));
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
        if (isset($_POST['active'])) $active = 1;
        else  $active = 0;
        $ab = new Abtract();
        $slug = $ab->to_slug($_POST['slug']);
        if (empty($name) && empty($tag) && empty($description) && empty($slug)) {
            header('location:/news/admin/createrViewsCate?error=0');
        } else {
            $newsCateDAO = new categories_repository();
            $newsCateDAO->addCategories(new Categories("", $name, $tag, $description, $icon, $slug, $active));
            header('location: /news/admin/getAllNewsCate');
        }
    }

    function GetAllContact()
    {
        $contactsDAO = new contacts_repository();
        $contacts = $contactsDAO->getAll();
        $this->view('ContactsGetAll', $contacts);
    }

    function createrViewsContact()
    {
        $this->view('ContactsAdd', "");
    }

    function createrContact()
    {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $title = $_POST['title'];
        $phone_number = $_POST['phone_number'];
        $content = $_POST['content'];
        $status = $_POST['status'];
        $active = $_POST['active'];
        if (empty($full_name) && empty($email) && empty($title) && empty($phone_number) && empty($content)) {
            header('location:/news/admin/createrViewsContact?error=0');
        } else {
            $contactsDAO = new contacts_repository();
            $contactsDAO->add(new contacts("", $full_name, $email, $title, $phone_number, $content, $status, $active));
            header('location: /news/admin/GetAllContact');
        }
    }

    function getContactById($id)
    {
        $contactsDAO = new contacts_repository();
        $contact = $contactsDAO->getById($id);
        $this->view('ContactsEdit', $contact);
    }

    function updateContact()
    {
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $title = $_POST['title'];
        $phone_number = $_POST['phone_number'];
        $content = $_POST['content'];
        if (isset($_POST['status']))  $status = 1;
        else  $status = 0;
        if (isset($_POST['active'])) $active = 1;
        else  $active = 0;
        echo $status;
        echo $active;
        if (empty($full_name) && empty($email) && empty($title) && empty($phone_number) && empty($content)) {
            header('location:/news/admin/createrViewsContact?error=0');
        } else {
            $contactsDAO = new contacts_repository();
            $contactsDAO->update(new contacts($id, $full_name, $email, $phone_number, $title, $content, $status, $active));
            header('location: /news/admin/GetAllContact');
        }
    }

    function deleteContact($id)
    {
        $contactDao = new contacts_repository();
        return $contactDao->deteteById($id);
    }

    function GetAllComment()
    {
        $commentDao = new comments_repository();
        $comments = $commentDao->getALL();
        $this->view('CommentsGetAll', $comments);
    }

    function getCommentById($id)
    {
        $commentDAO = new comments_repository();
        $comment = $commentDAO->getById($id);
        $this->view('ComentsEdit', $comment);
    }

    function updateComment()
    {
        $id = $_POST['id'];
        $user_id = $_POST['user_id'];
        $post_id = $_POST['post_id'];
        $content = $_POST['content'];
        if (isset($_POST['status']))  $status = 1;
        else  $status = 0;
        if (isset($_POST['active'])) $active = 1;
        else  $active = 0;
        $comment = new comments_repository();
        $comment->update(new comments($id, $user_id, $post_id, $content, $status, $active));
        header('location: /news/admin/GetAllComment');
    }

    function deleteComment($id)
    {
        $comment_sv = new comment_service();
        return $comment_sv->deleteComment($id);
    }
}