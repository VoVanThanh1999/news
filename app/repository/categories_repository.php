<?php 
include_once '../app/init.php';
class categories_repository {
    private $mysql;
    public function __construct(){
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
  
   
    function   getAll(){
        $query = "SELECT * FROM categories";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $items) {
            array_push($data, new Categories($items[0], $items[1], $items[2], $items[3], $items[4], $items[5], $items[6]));
        }
        return $data;
    }
    
    function deleteById($id){
        $query ="DELETE FROM categories WHERE id = '".$id."'";
        $result = $this->mysql->query($query);
        if($result==true){
            return  true;
        }
        return false;
    }
    
    function deleteAll(){
        
    }
    
    function saveOrUpdate(){
        
    }
    
    
}
