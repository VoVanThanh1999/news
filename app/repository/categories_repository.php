<?php 
include_once '../app/init.php';
class categories_repository {
    private $mysql;
    public function __construct(){
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
  
   
    function getAll(){
        $query = "SELECT * FROM categories";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $items) {
            array_push($data, new Categories($items[0], $items[1], $items[2], $items[3], $items[4], $items[5], $items[6]));
        }
        return $data;
    }
    function addCategories(Categories  $categories){
        $query = "INSERT INTO categories VALUE('$categories->id', '$categories->name', '$categories->description', '$categories->icon', '$categories->slug', '$categories->active')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function getById($id){
        $query = "SELECT * FROM categories WHERE id = '$id' LIMIT = 1";
        $result = $this->mysql->query($query);
        $datas = $result->fetch_all();
        if (count($datas)){
            return new Categories($datas[0][0], $datas[0][1], $datas[0][2], $datas[0][3], $datas[0][4], $datas[0][5], $datas[0][6]);
        }
        return null;
    }
    function update(Categories $categories){
        $query = "UPDATE categories SET name ='$categories->name', tag = '$categories->tag', description = '$categories->description', icon = '$categories->icon', slug = '$categories->slug', active = '$categories->active',
                   WHERE id = '$categories->id'";
        $result =$this->mysql->query($query);
        return $result;

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




    
    
}
