<?php 
include_once 'init.php';
 /**
  * @author vÃµ vÄƒn thÃ nh
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
        $str = preg_replace('/(Ã |Ã¡|áº¡|áº£|Ã£|Ã¢|áº§|áº¥|áº­|áº©|áº«|Äƒ|áº±|áº¯|áº·|áº³|áºµ)/', 'a', $str);
        $str = preg_replace('/(Ã¨|Ã©|áº¹|áº»|áº½|Ãª|á»�|áº¿|á»‡|á»ƒ|á»…)/', 'e', $str);
        $str = preg_replace('/(Ã¬|Ã­|á»‹|á»‰|Ä©)/', 'i', $str);
        $str = preg_replace('/(Ã²|Ã³|á»�|á»�|Ãµ|Ã´|á»“|á»‘|á»™|á»•|á»—|Æ¡|á»�|á»›|á»£|á»Ÿ|á»¡)/', 'o', $str);
        $str = preg_replace('/(Ã¹|Ãº|á»¥|á»§|Å©|Æ°|á»«|á»©|á»±|á»­|á»¯)/', 'u', $str);
        $str = preg_replace('/(á»³|Ã½|á»µ|á»·|á»¹)/', 'y', $str);
        $str = preg_replace('/(Ä‘)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
    
    
    
    function getLimitPost(){
        
    }
    
}