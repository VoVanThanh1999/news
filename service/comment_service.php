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
            $userDeltails = $userDAO->getById($cm->getUser_id());
            $cm->setName_user($userDeltails->getName());
            return $commentDAO->saveOrUpdate($cm);
        }
        return false;
    }
    
    public function activeCommentById($id){
        $commentDAO = new comments_repository();
        $comment = $commentDAO->getById($id);
        $postDAO = new post_repository();
        $userDAO = new user_repository();
        $postDetails = $postDAO->getById($comment->getPost_id());
        $userDeltails = $userDAO->getById($comment->getUser_id());
        if (isset($comment) && $comment->getActive()==0){
            $comment->setActive(1);
            $comment->setName_user($userDeltails->getName());
            $postDetails->setCount_conment($postDetails->getCount_conment()+1); 
            $postDAO->saveOrUpdate($postDetails);
            $commentDAO->saveOrUpdate($comment);
        }
    }
    
    public function deleteComment($id){
        $commentDAO = new comments_repository();
        $commentDAO->deleteById($id);
    }
    
    
    
    
   
  
}