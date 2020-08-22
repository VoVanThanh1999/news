<?php 
include_once 'init.php';
class categories_controller extends model_and_view_categories {


    public function  index() {
        $categoriesDao = new categories_repository();
        $datas =$categoriesDao->getAll();
        $this->view('trangchu', $datas);
    }
    public function add(){

        $this->view('add' );
    }

    public function saveCategories(){

        $categoriesDao = new categories_repository();
        $id = $_POST['id'];
        $name = $_POST['name'];
        $tag = $_POST['tag'];
        $description = $_POST['description'];
        $icon = $_POST['icon'];
        $slug = $_POST['slug'];
        $active = $_POST['active'];

        $categoires = new Categories($id, $name, $tag, $description, $icon, $slug, $active);
        $categoriesDao->addCategories($categoires);
    }
    public function updateById(){
        $id = $_GET['id'];
        $categoriesDao = new categories_repository();
        $categoriesDao->getById($id);
        $this->view('update');
    }
    public function saveUpdate(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $tag = $_POST['tag'];
        $description = $_POST['description'];
        $icon = $_POST['icon'];
        $slug = $_POST['slug'];
        $active = $_POST['active'];
        $categoriesDAO = new categories_repository();
        $categories = new Categories($id, $name, $tag, $description, $icon, $slug, $active);
        $categoriesDAO->update($categories);
    }
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