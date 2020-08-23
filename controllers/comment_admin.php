<?php
include_once 'init.php';
class comment_admin extends model_and_view_admin{
    
    
    public function activeCommentById($id){
       $comment_sv = new comment_service();
       $comment_sv->activeCommentById($id);
    }
    
    public function deleteComment($id){
        $comment_sv = new comment_service();
        $comment_sv->deleteComment($id);
    }
    
    public function getAllComment(){
        $commentDAO = new comments_repository();
        $comments = $commentDAO->getALL();
        print_r($comments);
    }
    
}