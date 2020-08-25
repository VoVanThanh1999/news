<?php 
include_once 'init.php';
class categories_repository {
    private $mysql;
    public function __construct(){
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }

     function getById($id){
        $query = "SELECT * FROM categories where id = ".$id."";
        $result = $this->mysql->query($query);
        while($row = $result->fetch_assoc()) {
            $categories =  new Categories($row['id'], $row['name'], $row['tag'], $row['description'], $row['icon'], $row['slug'], $row['active']);
        }
        if(isset($categories)){
            return  $categories ;
        }
        return null;
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
    
    function getCategoriesIsActive(){
        $query = "SELECT * FROM categories where active =1";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $items) {
            array_push($data, new Categories($items[0], $items[1], $items[2], $items[3], $items[4], $items[5], $items[6]));
        }
        return $data;
    }
    function addCategories(Categories  $categories){
        $query = "INSERT INTO categories(name,tag, description,icon, slug, active) VALUE('$categories->name', '$categories->tag','$categories->description', '$categories->icon', '$categories->slug', '$categories->active')";
        $result = $this->mysql->query($query);
        return $result;
    }

    function update(Categories $categories){
        $query = "UPDATE categories SET name ='$categories->name', tag = '$categories->tag', description = '$categories->description', icon = '$categories->icon', slug = '$categories->slug', active = '$categories->active'
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
