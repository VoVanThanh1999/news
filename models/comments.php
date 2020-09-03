<?php 
class comments{
    public $id;
    public $user_id;
    public $post_id;
    public $content;
    public $status;
    public $active;
    public $name_user;
    public $subject;
    public $email;
    public $date;
    
    public function __construct($id,$user_id,$post_id,$content,$status,$active,$name_user,$subject,$email,$date){
        $this->id=$id;
        $this->user_id=$user_id;
        $this->post_id=$post_id;
        $this->content=$content;
        $this->status=$status;
        $this->active=$active;
        $this->name_user=$name_user;
        $this->subject=$subject;
        $this->email=$email;
        $this->date=$date;
    }
    
    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

   
    
    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getPost_id()
    {
        return $this->post_id;
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
    public function getName_user()
    {
        return $this->name_user;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param mixed $post_id
     */
    public function setPost_id($post_id)
    {
        $this->post_id = $post_id;
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
     * @param mixed $name_user
     */
    public function setName_user($name_user)
    {
        $this->name_user = $name_user;
    }
    
    
    
    
   

}