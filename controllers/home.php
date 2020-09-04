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
    
    public function getByCategories($idCategories){
        $postDAO = new post_repository();
        $posts = $postDAO->getPostLimitByCategoires(2,$idCategories); 
        $this->view('loadpostsbycategories', $posts); 
    }
    
    public function getByCategoriesLimit($limit,$idCategories){
        $postDAO = new post_repository();
        $posts = $postDAO->getPostLimitByCategoires($limit*2,$idCategories); 
        print_r(json_encode($posts));
    }
    
    public function utf8_for_xml($string){
        return preg_replace('/[^\x{0009}\x{000a}\x{000d}\x{0020}-\x{D7FF}\x{E000}-\x{FFFD}]+/u',
            ' ', $string);
    }
    
    public function laterNews(){
        $postDAO = new post_repository();
        $posts = $postDAO->getPostLaterNews();
        $this->view('loadpostlatternews', $posts);  
    }
    
    public function getPostLaterNewsLimit($limit){
        $postDAO = new post_repository();
        $posts = $postDAO->getPostLaterNewsLimit($limit*2);
        print_r(json_encode($posts));
    }
    
    public function popularNews(){
        $postDAO = new post_repository();
        $posts = $postDAO->getPostPopular();
        $this->view('loadpostpopular', $posts);  
    }
    
    public function getPostPopularNewsLimit($limit){
        $postDAO = new post_repository();
        $posts = $postDAO->getPostPopularLimit($limit*2);
        print_r(json_encode($posts));
    }
    
   
    
    public function about(){
        $this->view('about', "");
    }
 
   
    
    
}