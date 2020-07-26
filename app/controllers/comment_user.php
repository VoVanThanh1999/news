<?php 
session_start();
class comment_user extends model_and_view_user {
   
    public function getCommentByIdPost($id){
        
    }
    
    public function createComment(){
        if (isset($_SESSION['id'])) {      
            $user_id = $_SESSION['id'];
            $post_id = $_POST['post_id'];
            $content = $_POST['content'];
            $status = $_POST['status'];
            $active = $_POST['active'];
            $comment_sv = new comment_service();
            
            $comment_sv->createComment(new comments("",$user_id,$post_id,$content,$status,$active));
        }else{
            header('location: /news/public/login/index');
        }
    }
    
   
}