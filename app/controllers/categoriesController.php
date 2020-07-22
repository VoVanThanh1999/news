<?php

require_once "app/models/categories.php";
class categoriesController
{
    private $categories;

    public function __construct()
    {
        $this->categories = new categoriesModel();
    }

    function DanhSach()
    {
        $data = $this->categories->getAll();
        require_once "app\core\danhsach.php";
    }
}