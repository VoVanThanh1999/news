<?php 
class configs{
    public $id;
    public $title;
    public $config_key;
    public $config_value;
    public $description;
    public $active;
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getConfig_key()
    {
        return $this->config_key;
    }

    public function getConfig_value()
    {
        return $this->config_value;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setConfig_key($config_key)
    {
        $this->config_key = $config_key;
    }

    public function setConfig_value($config_value)
    {
        $this->config_value = $config_value;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

}