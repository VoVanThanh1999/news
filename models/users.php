<?php 
class users {
    public $id;
    public $name;
    public $email;
    public $pass_word;
    public $gender;
    public $date_of_birth;
    
    public function __construct($id,$name,$email,$pass_word,$gender,$date_of_birth){
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->pass_word=$pass_word;
        $this->gender=$gender;
        $this->date_of_birth=$date_of_birth;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPass_word()
    {
        return $this->pass_word;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getDate_of_birth()
    {
        return $this->date_of_birth;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPass_word($pass_word)
    {
        $this->pass_word = $pass_word;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setDate_of_birth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
    }

    
}