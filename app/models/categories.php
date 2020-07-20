<?php 
class Categories{
    private $id;
    private $name;
    private $tag;
    private $description;
    private $icon;
    private $slug;
    private $active;
    
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