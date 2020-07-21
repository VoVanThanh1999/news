<?php 
include_once '../app/init.php';
require '../app/models/Categories.php';
class admin extends model_and_view_admin{
    private $categoriesModel;
    public function __construct()
    {
        $this->categoriesModel = new CategoriesModel();
    }
    function index() {
        $this->view('index',"");
    }
    function NewsCateGetAll() {
        $data = $this->categoriesModel->GetAll();
        $this->view('NewsCateGetAll',$data);
    }
    function NewsCateAdd() {
        $this->view('NewsCateAdd',"");
    }
    function NewsCateEdit() {
        $this->view('NewsCateEdit',"");
    }

}