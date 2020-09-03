<?php
include_once 'init.php';
// author nguyen dinh viet
class contacts_controller extends model_and_view_user{

    function getAll(){
        $contactsDAO = new contacts_repository();
        $datas = $contactsDAO->getAll();

        $this->view('index_contacts', $datas);
    }
 
   /*  function saveAdd(){
        $contactsDAO = new contacts_repository();
        $id = $_POST['id']; 
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $status = $_POST['status'];
        $active = $_POST['active'];
        $reply = "";
        $contacts = new contacts($id, $full_name, $email, $phone_number, $title, $content, $status, $active,$reply);
        $result = $contactsDAO->add($contacts);

        if ($result == true){
            header('location: getAll');

        }else echo "chưa thêm đc";
    }
 */
    function getById($id){
        $contactsDAO = new contacts_repository();
        $contact = $contactsDAO->getById($id);
        $this->view('update_contacts', $contact);
    }
    
    function save_contacts(){

        $contactsDAO = new contacts_repository();
        $id = 0;
        $full_name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $title = $_POST['subject'];
        $content = $_POST['message'];
        $status = 1;
        $active = 1;
        $reply = "";
        $contacts = new contacts($id, $full_name, $email, $phone_number, $title, $content, $status, $active,$reply);
        $result = $contactsDAO->add($contacts);
        echo $result;
     
    }
    
    function reply_email(){
        $data = json_decode(json_encode($_POST));
        $data->idContact;
   
        $idUser =  $_SESSION['id'] ;
        $userDAO =new user_repository();
        $userDetails = $userDAO->getById($idUser);
        $contactDAO =new contacts_repository();
        $contact = $contactDAO->getById($data->idContact);
        $mail = new PHPMailer();
        //SMTP Setting
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        
        $mail->Host = "smtp.gmail.com";
        $mail->Port = '465';
        $mail->isHTML(true);
        $mail->Username = 'btc.ninhthuan@gmail.com';
        $mail->Password = '0958108905Qq';
        $mail->SetFrom('btc.ninhthuan@gmail.com',"dasdsa");
    
        $mail->Subject = "test" ;
        $mail->Body = "wellcomme to channel";
        $mail->AddAddress('btc.ninhthuan@gmail.com');
        
        if(! $mail->send()){
            echo"send mail error";
        }else{
            $contact->setReply($data->content);
            $contact->setStatus(1);
            $contact->setActive(1);
            $contactDAO->update($contact);
            echo"Message have been send";
        }
        return " ";
    }
    
    function deleteById($id){
        $contactsDAO = new contactsModels();
        $contact = $contactsDAO->deteteById($id);
        if ($contact == true){
            echo "xóa thành công";
        } else echo "xóa thất bại";
    }
}