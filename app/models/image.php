<?php 
class image{
    private $id;
    private $name;
    private $id_post;
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId_post()
    {
        return $this->id_post;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setId_post($id_post)
    {
        $this->id_post = $id_post;
    }

   
    
}