<?php 
class contacts{
    public $id;
    public $full_name;
    public $email;
    public $phone_number;
    public $title;
    public $content;
    public $status;
    public $active;
    public function __construct($id, $full_name, $email, $phone_number, $title, $content, $status, $active)
    {
        $this->id = $id;
        $this->full_name = $full_name;
        $this->email =  $email;
        $this->phone_number = $phone_number;
        $this->title = $title;
        $this->content = $content;
        $this->status = $status;
        $this->active = $active;
    }

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
class contactsModels{
    // author nguyen dinh viet


}