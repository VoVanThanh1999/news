<?php 
include_once 'init.php';

class reply_message {
    
    public function reply(){
        if(!isset($_SESSION))
        {
            session_start();
        } 
        $data = json_decode(json_encode($_POST));
        print_r($data);
        $userDAO =new user_repository();
        $user = $userDAO->getById($_SESSION['id']);
        
        if($_SESSION['id']&&$user!=null){
            $date = date("Y/m/d");
            $contactsDAO = new contacts_repository();
            $contact = $contactsDAO->getById($data->idContact);
   
            $to = $contact->getEmail();
            $subject = $contact->getTitle();
            $message =  $data->content;
            $contact->setActive(1);
            $contact->setReply($message);
            $replyDAO =new reply_repository();
            $reply = new reply();
            $reply->setTitle("Respon to".$subject);
            $reply->setMessage( $data->content);
            $reply->setContactID($contact->getId());
            $reply->setUserID($user->getId());
            $reply->setDateCreate($date);
            $replyDAO->saveOrUpdate($reply);
            $contactsDAO->update($contact);
            $header = "FROM btc.ninhthuan@gmail.com.vn";
         /*  dsa */
        }
    }
    
   
    
}

?>