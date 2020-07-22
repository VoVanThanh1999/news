<?php 
class Categories{
    private $id;
    private $name;
    private $tag;
    private $description;
    private $icon;
    private $slug;
    private $active;
    
//    public function __construct($id, $name, $tag, $description, $icon, $slug, $active)
//    {
//        $this->id = $id;
//        $this->name = $name;
//        $this->tag = $tag;
//        $this->description = $description;
//        $this->icon = $icon;
//        $this->slug = $slug;
//        $this->active = $active;
//    }
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
class categoriesModel
{
    public $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(localhostss, root, '', categories) or die("Lỗi kết nối đến sever");
    }
    function getAll(){
        $query = "SELECT * FROM categories";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value){
            array_push($data, new Categories($value[0], $value[1], $value[2], $value[3], $value[4], $value[5], $value[6]));
        }
        return $data;
    }
}
