<?php 
include_once 'init.php';
class comments_repository {
    private $mysql;
    
    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
    
    function getById($id){
        // //  $user_id,$post_id,$content,$status,$active
        $query = "SELECT * FROM comments where id = ".$id."";
        $result = $this->mysql->query($query);
        $comment;
        while($row = $result->fetch_assoc()) {
            $comment =  new comments($row['id'], $row['user_id'], $row['post_id'], $row['content'], $row['status_s'], $row['active']);
        }
        if(isset($comment)){
            return  $comment ;
        }
        return null;
    }
   
    function getALL(){
        $query = "SELECT * FROM comments";
  
        $result = $this->mysql->query($query);
        $comments = array();
        while($row = $result->fetch_assoc()) {
            $comment =  new comments($row['id'], $row['user_id'], $row['post_id'], $row['content'], $row['status_s'], $row['active']);
            array_push($comments,$comment);
        }
        return  $comments;
    }
    
    function deleteById($id){
        $query = " DELETE FROM comments WHERE id='".$id."' ";
        $result = $this->mysql->query($query);
        return $result;
    }
    function saveOrUpdate(comments $p) {
      //  $user_id,$post_id,$content,$status,$active

        $flag = true;
        if ($p->getId() == null) {
            echo "save";
            $query = "INSERT INTO comments (user_id, post_id, content,status_s,active)
                        VALUES ('".$p->user_id."', '".$p->post_id."','".$p->content."','".$p->status."',0)";
            $result = $this->mysql->query($query);
            $flag = $result;
        } else {
            $query = "  UPDATE comments
                        SET user_id=?, post_id=?, content=?,status_s=?,active=?
                        WHERE id=? ";
            $stmt =  $this->mysql->prepare($query);
            $id= $p->id;
            $user_id = $p->user_id;
            $post_id = $p->post_id;
            $content= $p->content;
            $status_s = $p->status;
            $active=$p->active;
            $stmt->bind_param("ssdddd",$id,$user_id,$post_id,$content,$status_s,$active);
                $stmt->execute();
            if ($stmt->error) {
                $flag = false;
            }else{
                $flag = true;
            }
            $stmt->close();
        }
        return $flag;
    }
    
    function getByIdPost($idPost){
        
    }
    
}