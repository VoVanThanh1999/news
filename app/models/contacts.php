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
            array_push($datas , new contacts($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7]));
        }
        return $datas;
    }
    function add(contacts $contacts){
        $query = "INSERT INTO contacts (full_name, email, phone_number,title,content,status_s,actvie)
                    VALUES ('".$contacts->full_name."','".$contacts->email."',".$contacts->phone_number.",'".$contacts->title."','".$contacts->content."','".$contacts->status."',0)";
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
            return new contacts($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][5], $data[0][6], $data[0][7]);
        }
        return null;
    }

    function update(contacts $contacts){
        $query = "UPDATE contacts SET full_name = '".$contacts->full_name."', email = '".$contacts->email."', phone_number = '".$contacts->phone_number."', title = '".$contacts->title."', content = '".$contacts->content."', status_s = '".$contacts->status."', actvie = '".$contacts->active."'
        WHERE id = '".$contacts->id."'";
        $result = $this->mysql->query($query);
        return $result;
    }

    function deteteById($id){
        $query ="DELETE FROM contacts WHERE id = '".$id."'";
        $result = $this->mysql->query($query);
        if($result==true){
            return  true;
        }
        return false;
    }

}