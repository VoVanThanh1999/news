<?php 
include_once 'init.php';

class chitiet extends model_and_view_chitiet{
    
    public function baiviet($slug,$id){
        $postDAO = new post_repository();
        $post = $postDAO->getById($id);
        $this->view('chi_tiet_bai_viet', $post);
    }
}