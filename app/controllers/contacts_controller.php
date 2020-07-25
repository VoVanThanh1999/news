<?php
include_once '../app/init.php';
// author nguyen dinh viet
class contacts_controller extends model_and_view_user{

    function getAll(){
        $contactsDAO = new contactsModels();
        $datas = $contactsDAO->getAll();

        $this->view('index_contacts', $datas);
    }
    function add(){
        $this->view('add_contacts');
    }
    function saveAdd(){
        $contactsDAO = new contactsModels();
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $status = $_POST['status'];
        $active = $_POST['active'];
        $contacts = new contacts($id, $full_name, $email, $phone_number, $title, $content, $status, $active);
        $result = $contactsDAO->add($contacts);

        if ($result == true){
            header('location: getAll');

        }else echo "chưa thêm đc";
    }

    function getById($id){
        $contactsDAO = new contactsModels();
        $contact = $contactsDAO->getById($id);
        $this->view('update_contacts', $contact);


    }
    function save_contacts(){
        $contactsDAO = new contactsModels();
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $status = $_POST['status'];
        $active = $_POST['active'];
        $contacts = new contacts($id, $full_name, $email, $phone_number, $title, $content, $status, $active);
        $result = $contactsDAO->update($contacts);
        if ($result == true){
            header('location: getAll');

        }else echo "error";
    }

    function deleteById($id){
        $contactsDAO = new contactsModels();
        $contact = $contactsDAO->deteteById($id);
        if ($contact == true){
            echo "xóa thành công";
        } else echo "xóa thất bại";


    }
}