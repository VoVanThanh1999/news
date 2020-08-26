<?php 
session_start();
include_once 'init.php';
class comment_user extends model_and_view_user {
   
    public function getCommentByIdPost($id){
        
    }
    
    public function createComment(){

        if (isset($_SESSION['id'])) {      
            $user_id = $_SESSION['id'];
            $post_id = $_POST['post_id'];
            $content = $_POST['content'];
            $comment_sv = new comment_service();
            $comment_sv->createComment(new comments("",$user_id,$post_id,$content,0,0));
            header('location: /news/chitiet/baiviet/slug/'.$post_id );
        }else{
            header('location: /news/login/index');
        }
    }
    
   
}