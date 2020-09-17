<?php 
include_once 'init.php';
class reply_repository {
    private $mysql;
    
    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
    
    function Register(users $users)
    {}
    
    function getById($id)
    {
        
        $query = " SELECT * FROM users WHERE id = " . $id . " ";
        $result = $this->mysql->query($query);
        $user;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = new users($row['id'], $row['name'], $row['email'],$row['pass_word'], $row['gender'], $row['date_of_birth']);
            }
        }
        if (isset($user)) {
            return $user;
        }
        return null;
    }
    function saveOrUpdate(reply $p)
    {   
        $flag = true;
        if ($p->getId() == null) {
            $query = "INSERT INTO reply ( MESSAGE, DATE_CREATE,USER_ID,CONTACT_ID,TITLE)
 VALUES ('" . $p->message . "', '" . $p->dateCreate . "', '" . $p->userID . "','" . $p->contactID . "','" . $p->title . "')";
            $result = $this->mysql->query($query);
            $flag = $result;
        } else {
            $query = "  UPDATE users
                        SET name=$p->name, email=$p->email, pass_word=$p->pass_word,gender=$p->gender,date_of_birth=$p->date_of_birth
                        WHERE id=$p->id ";
            $result = $this->mysql->query($query);
        }
        return $flag;
    }
    function getAll()
    {
        $query =" SELECT * FROM users  ";
        $result = $this->mysql->query($query);
        $users = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $user = new users($row['id'],$row['name'],$row['email'],$row['pass_word'],$row['gender'],$row['date_of_birth']);
                array_push($users,$user);
            }
        }
        return $users;
    }
}


