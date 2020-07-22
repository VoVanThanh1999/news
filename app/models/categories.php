<?php
class Categories
{
    public $id;
    public $name;
    public $tag;
    public $description;
    public $icon;
    public $slug;
    public $active;

    public function __construct($id, $name, $description,$tag,$icon,$slug,$active)
    {
        $this->id = $id;
        $this->name = $name;
        $this->tag = $tag;
        $this->description = $description;
        $this->icon = $icon;
        $this->slug = $slug;
        $this->active = $active;
    }
}
class CategoriesModel{
    private $mysql;
    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
    function GetAll()
    {
        $query = "SELECT * FROM categories";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data, new Categories($item[0], $item[1], $item[2], $item[3], $item[4], $item[5], $item[6]));
        }
        return $data;
    }
}