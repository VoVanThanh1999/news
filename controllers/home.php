<?php 
include_once 'init.php';

class home extends model_and_view_user {
    
   
  
    public function  index() {
        $categoriesDao = new categories_repository();
        $categories[] = $categoriesDao->getAll();
        $this->view('trangchu', $categories);
    }
    
    public function  contact() {
        $categoriesDao = new categories_repository();
        $categories[] = $categoriesDao->getAll();
        $this->view('contact', $categories); 
    }
    
    public function getByCategories($limit,$idCategories){
        $postDAO = new post_repository();
        $posts = $postDAO->getPostLimitByCategoires($limit*2,$idCategories); 
        $this->view('loadpostsbycategories', $posts); 
        print_r($posts);
    }
    
    public function getByCategoriesLimit($limit,$idCategories){
        $postDAO = new post_repository();
        $posts = $postDAO->getPostLimitByCategoires($limit*4,$idCategories);
        print_r(json_encode($posts));
    }
    
   
    
    
}