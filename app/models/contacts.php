<?php 
class Contacts{
    
    private $id;
    private $full_name;
    private $email;
    private $phone_number;
    private $title;
    private $content;
    private $status;
    private $active;
    public function getId()
    {
        return $this->id;
    }

    public function getFull_name()
    {
        return $this->full_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone_number()
    {
        return $this->phone_number;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFull_name($full_name)
    {
        $this->full_name = $full_name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPhone_number($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    
    
    
}