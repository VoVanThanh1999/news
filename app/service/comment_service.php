<?php 
include_once '../app/init.php';
/**
 * @author võ văn thành
 * 
 */
class comment_service {
    private $userDAO ;
    private $postDAO;
    private $commentDAO;
    
    function __construct() {
       $this->userDAO = new user_repository();
       $this->postDAO = new post_repository();
       $this->commentDAO = new comment_repository();
    }
    
    public function createComment(comments $cm){
        if ($this->userDAO->getById($cm->getUser_id()) && $this->postDAO->getById($cm->getPost_id())) {
            $this->commentDAO->saveOrUpdate($cm);
        }   
    }
    
    public function activeCommentById($id){
        $comment = $this->commentDAO->getById($id);
        if (isset($comment)){
            $comment->setActive(1);
            $commentDAO->saveOrUpdate($comment);
        }
    }
    
    public function deleteComment($id){
        $this->commentDAO->deleteById($id);
    }
    
   
  
}