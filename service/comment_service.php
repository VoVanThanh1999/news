<?php 
include_once 'init.php';
/**
 * @author võ văn thành
 * 
 */
class comment_service {
   
    
    public function createComment(comments $cm){
        $userDAO = new user_repository();
        $postDAO = new post_repository();
        $commentDAO = new comments_repository();
        if ($userDAO->getById($cm->getUser_id())!=null && $postDAO->getById($cm->getPost_id()) != null) {
            return $commentDAO->saveOrUpdate($cm);
        }
        return false;
    }
    
    public function activeCommentById($id){
        $commentDAO = new comments_repository();
        $comment = $commentDAO->getById($id);
        if (isset($comment)){
            $comment->setActive(1);
            $commentDAO->saveOrUpdate($comment);
        }
    }
    
    public function deleteComment($id){
        $commentDAO = new comments_repository();
        $commentDAO->deleteById($id);
    }
}