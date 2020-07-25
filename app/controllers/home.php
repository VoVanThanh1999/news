<?php 
include_once '../app/init.php';

class home extends model_and_view_user {
    
  
    public function  index() {
        $categoriesDao = new categories_repository();
        $categories[] = $categoriesDao->getAll();
        $this->view('trangchu', $categories);
    }
    public  function pages($page){
        
           echo  $page;
    }
    
    public function test($param){
        $this->view('trangchu',$param);
    }
    
    public function uploadFiles(){
        
    }
        
    
    
}