
<?php 
include_once '../app/init.php';
class user_repository {
   private $mysql;
    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
    function Register(users $users){

    }
    function getById($id){
        
    }
    
    function findById($id){
        
    }
    
    function deleteById($id){
        
    }
    
    function saveOrUpdate($id) {
        
    }
  
   
}