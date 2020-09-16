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
    public $reply;
    
    public function __construct($id, $full_name, $email, $phone_number, $title, $content, $status, $active,$reply)
    {
        $this->id = $id;
        $this->full_name = $full_name;
        $this->email =  $email;
        $this->phone_number = $phone_number;
        $this->title = $title;
        $this->content = $content;
        $this->status = $status;
        $this->active = $active;
        $this->reply = $reply;
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFull_name()
    {
        return $this->full_name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPhone_number()
    {
        return $this->phone_number;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @return mixed
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $full_name
     */
    public function setFull_name($full_name)
    {
        $this->full_name = $full_name;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhone_number($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @param mixed $reply
     */
    public function setReply($reply)
    {
        $this->reply = $reply;
    }



    
}
