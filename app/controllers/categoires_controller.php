<?php 
include_once '../app/init.php';
class categoires_controller {
   
    function deleteById($id){
        $categoriesDao = new categories_repository();
        $value = $categoriesDao->deleteById($id);
        if ($value==true) {
            echo"Xóa thành công";
        }else{
            echo"Xóa thất bại";
        }
    }
}