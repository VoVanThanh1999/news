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
        if ($postDAO->getById($cm->getPost_id()) != null) {
            $userDeltails = $userDAO->getById($cm->getUser_id());      
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
            $postDetails->setCount_conment($postDetails->getCount_conment()+1);
            $postDAO->saveOrUpdate($postDetails);
            $commentDAO->saveOrUpdate($comment); 
        }
    }
    
    public function disableCommentById($id){
        $commentDAO = new comments_repository();
        $comment = $commentDAO->getById($id);
        $postDAO = new post_repository();
        $postDetails = $postDAO->getById($comment->post_id);
        if (isset($comment) && $comment->getActive()==1){
            $postDetails->setCount_conment($postDetails->getCount_conment()-1);
            $postDAO->saveOrUpdate($postDetails);
            $comment->setActive(0);
            $comment->setStatus(0);
            $commentDAO->saveOrUpdate($comment);
        }
    }
    
    public function deleteComment($id){
        $commentDAO = new comments_repository();
        $comment = $commentDAO->getById($id);
        $postDetails = $postDAO->getById($comment->getPost_id());
        if (isset($comment) && $comment->getActive()==0){
            $postDetails->setCount_conment($postDetails->getCount_conment()-1);
            $postDAO->saveOrUpdate($postDetails);
            $commentDAO->deleteById($id);
        }
      
    }
}