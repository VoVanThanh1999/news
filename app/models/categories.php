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
    
    public function __construct($id, $name,$tag,$description,$icon,$slug,$active)
    {
        $this->id = $id;
        $this->name = $name;
        $this->tag = $tag;
        $this->description = $description;
        $this->icon = $icon;
        $this->slug = $slug;
        $this->active = $active;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function setActive($active)
    {
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