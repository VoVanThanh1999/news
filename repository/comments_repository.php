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
            $comment =  new comments($row['id'], $row['user_id'], $row['post_id'], $row['content'], $row['status_s'], $row['active'],$row['name_user'],$row['subject'],$row['email'],$row['date']);
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
            $comment =  new comments($row['id'], $row['user_id'], $row['post_id'], $row['content'], $row['status_s'], $row['active'],$row['name_user'],$row['subject'],$row['email'],$row['date']);
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
            $query = "INSERT INTO comments (user_id, post_id, content,status_s,active,name_user,subject,email,date)
                        VALUES ('".$p->user_id."', '".$p->post_id."','".$p->content."',0,0,'".$p->name_user."','".$p->subject."','".$p->email."','".$p->date."')";
            $result = $this->mysql->query($query);
            $flag = $result;
        } else {
            print_r($p);
            $query = "  UPDATE comments
                        SET user_id=?, post_id=?, content=?,status_s=?,active=?,name_user=?,subject=?,email=?
                        WHERE id=? ";
            $stmt =  $this->mysql->prepare($query);
            $user_id = $p->user_id;
            $post_id = $p->post_id;
            $content= $p->content;
            echo $content;
            $status_s = $p->status;
            $active=$p->active;
            $name_user = $p->name_user;
            $subject = $p->subject;
            $email = $p->email;
            $stmt->bind_param("sssssssss",$user_id,$post_id,$content, $p->status,$p->active,$name_user,$subject,$email,$p->id);
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
    function update(comments $p){
        $id= $p->id;
        $user_id = $p->user_id;
        $post_id = $p->post_id;
        $content= $p->content;
        $status_s = $p->status;
        $active= $p->active;
        $subject =$p->subject;
        $email = $p->email;
        $query = "UPDATE comments SET user_id ='$user_id', post_id = '$post_id', content = '$content', status_s = '$status_s', active = '$active',name_user='$name_user',subject='$subject',email='$subject'
                   WHERE id = $id";
        $result =$this->mysql->query($query);
    }
    function getByIdPost($idPost){
        
    }
    
}