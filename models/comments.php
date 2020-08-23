<?php 
class comments{
    public $id;
    public $user_id;
    public $post_id;
    public $content;
    public $status;
    public $active;
    
    public function __construct($id,$user_id,$post_id,$content,$status,$active){
        $this->id=$id;
        $this->user_id=$user_id;
        $this->post_id=$post_id;
        $this->content=$content;
        $this->status=$status;
        $this->active=$active;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function getPost_id()
    {
        return $this->post_id;
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

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    public function setPost_id($post_id)
    {
        $this->post_id = $post_id;
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