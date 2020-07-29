<?php 
class post_user extends model_and_view_user {
    function getAll(){
        $postDAO = new post_repository();
        $posts = $postDAO->getPostLatestNews();
        $this->view("laternews",$posts);
        
        
        
    }
    
}