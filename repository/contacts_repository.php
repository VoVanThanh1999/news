<?php
include_once 'init.php';
class contacts_repository
{
    private $mysql;
    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
    function getAll(){
        $query = "SELECT * FROM contacts";
        $result = $this->mysql->query($query);
        $datas = [];
        foreach ($result->fetch_all() as $value){
            array_push($datas , new contacts($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8]));
        }
        return $datas;
    }
    function add(contacts $p){
        print_r($p);
        $query = "INSERT INTO contacts (full_name, email, phone_number,title,content,status,active,reply)
                    VALUES ('".$p->full_name."','".$p->email."','".$p->phone_number."','".$p->title."','".$p->content."',0,0,'".$p->reply."')";
    
        $result = $this->mysql->query($query);
        return $result;
    }

    function getById($id){
        $query = "SELECT
                        * 
                    FROM
                        contacts
                    WHERE
                        id = '".$id."' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new contacts($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][5], $data[0][6], $data[0][7],$data[0][8]);
        }
        return null;
    }

    function update(contacts $contacts){
        print_r($contacts);
        $query = "UPDATE contacts SET active = b'$contacts->active', reply = '$contacts->reply'
        WHERE id = $contacts->id";
        $result = $this->mysql->query($query);
        return $result;
    }

    function deteteById($id){
        $query ="DELETE FROM contacts WHERE id = '$id'";
        $result = $this->mysql->query($query);
        if($result==true){
            return  true;
        }
        return false;
    }
}