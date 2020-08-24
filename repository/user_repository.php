
<?php
include_once 'init.php';

class user_repository
{

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
    function saveOrUpdate(users $p)
    {
        $flag = true;
        if ($p->getId() == null) {
            $query = "INSERT INTO users ( name, email,pass_word,gender,date_of_birth)
 VALUES ('" . $p->name . "', '" . $p->email . "', '" . $p->pass_word . "','" . $p->gender . "','" . $p->date_of_birth . "')";
            $result = $this->mysql->query($query);
            $flag = $result;
        } else {
            $query = "  UPDATE users
                        SET name=?, email=?, pass_word=?,gender=?,date_of_birth=?
                        WHERE id=? ";
            $stmt = $this->mysql->prepare($query);
            $id = $p->id;
            $name = $p->name;
            $email = $p->email;
            $pass_word = $p->pass_word;
            $gender = $p->gender;
            $date_of_birth = $p->date_of_birth;
            $stmt->bind_param("ssdssssss", $name, $email, $pass_word, $gender, $date_of_birth, $id);
            $stmt->execute();
            if ($stmt->error) {
                $flag = false;
            } else {
                $flag = true;
            }
            $stmt->close();
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
    function deleteById($id){
        $query = " DELETE FROM users WHERE id='".$id."' ";
        $result = $this->mysql->query($query);
        return $result;
    }
}