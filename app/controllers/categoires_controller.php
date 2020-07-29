<?php 
include_once '../app/init.php';
class categoires_controller extends  model_and_view_categories{
   
    function deleteById($id){
        $categoriesDao = new categories_repository();
        $value = $categoriesDao->deleteById($id);
        if ($value==true) {
            echo"Xóa thành công";
        }else{
            echo"Xóa thất bại";
        }
    }
    function getCategoriesIsActive(){
        $categoriesDao = new categories_repository();
        $categories = $categoriesDao->getCategoriesIsActive();
        $this->view("categories",$categories);
        
    }
}