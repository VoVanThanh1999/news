<?php 
include_once '../app/init.php';
 /**
  * @author võ văn thành
  *
  */
 class post_service {
   
    
    function __construct() {
        $this->postDAO = new post_repository();
        $this->commentDAO =new comments_repository();
        $this->categoriesDAO = new categories_repository();
    }
    
    function createPost(posts $p){
        $categoriesDAO = new categories_repository();
        $postDAO = new post_repository();
        if ($categoriesDAO->getById($p->getCategory_id())!=null) {
            $postDAO->saveOrUpdate($p);
        } 
    }
    function deletePost($id){
        $postDAO = new post_repository();
        $commentDAO= new comments_repository();
        $flag = false;
        if ($postDAO->getById($id)!= null) {
            $flag=   $postDAO->deleteById($id);
            $comments = $commentDAO->getByIdPost($id);
            if($comments!=null){
                foreach ($comments as $comment) {
                    $commentDAO->deleteById($comment->getId());
                }
            }
          
            return $flag;
        }
        return $flag;
    } 
    
    function activePost($id){
        $postDAO = new post_repository();
        if ($postDAO->getById($id)!=null) {
            $post = $postDAO->getById($id);
            $post->setActive(1);
            return  $postDAO->saveOrUpdate($post);
        }
        return false;
    }
    
    function to_slug($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
    
    
    
    function getLimitPost(){
        
    }
    
}