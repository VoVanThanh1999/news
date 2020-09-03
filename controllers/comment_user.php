<?php 
session_start();
include_once 'init.php';
class comment_user extends model_and_view_user {
   
    public function getCommentByIdPost($id){
        
    }
    
    public function createComment(){
        $data = json_decode(json_encode($_POST));
        $user_id = 0;
        $post_id = $data->post_id;
        $content = $data->content;
        $nameUser = $data->nameUser;
        $email = $data->email;
        $subject = $data->subject;
        $comment_sv = new comment_service();   
        $date = date("Y/m/d");
        $comment_sv->createComment(new comments("",$user_id,$post_id,$content,0,0,$nameUser,$subject,$email,$date));
        header('location: /news/chitiet/baiviet/slug/'.$post_id );  
    }
    
   
}