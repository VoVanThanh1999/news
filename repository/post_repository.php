<?php
include_once 'init.php';

class post_repository
{

    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }

    function getById($id){
        $query =" SELECT * FROM post WHERE id = ".$id ." ";
        $result = $this->mysql->query($query);
        $post;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $post = new posts($row['id'],$row['category_id'],$row['title'],$row['intro'],$row['content'],$row['images'],$row['tag'],$row['description'],$row['count_conment'],$row['slug'],$row['active'],$row['date']);
            }
        } 
        if (isset($post)) {
            return $post;
        }
        return null;
    }

    function deleteById($id){
        $query = " DELETE FROM post WHERE id='".$id."' "; 
        $result = $this->mysql->query($query);
        return $result;
    }

    function saveOrUpdate(posts $p){

        $flag = true;
        if ($p->getId() == null) {
            $query = "INSERT INTO post (category_id, title, intro,content,images,tag,description,slug,active,count_conment,date)
 VALUES ('$p->category_id', '$p->title', '$p->intro','$p->content','$p->images.','$p->tag','$p->description','$p->slug',0,$p->active,'$p->date')";
            $result = $this->mysql->query($query);
            $flag = $result;
        } else {
            $query = "UPDATE post SET category_id= $p->category_id, title ='$p->title', intro = '$p->intro', content = '$p->content', images = '$p->images', tag = '$p->tag', description = '$p->description',  slug = '$p->slug', active = $p->active  
                   WHERE id = $p->id";
            $result = $this->mysql->query($query);
            $flag = $result;
        }
        return $flag;
    }

    function getAll()
    {
        $query =" SELECT * FROM post  ";
        $result = $this->mysql->query($query);
        $posts = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $post = new posts($row['id'],$row['category_id'],$row['title'],$row['intro'],$row['content'],$row['images'],$row['tag'],$row['description'],$row['count_conment'],$row['slug'],$row['active'],$row['date']);
//                print_r($post);
                array_push($posts,$post);
            }
        }
        return $posts;
    }
    
    function getPostLimitByCategoires($limit,$idCategories){
        $query =" SELECT * FROM post where category_id = ".$idCategories."  LIMIT ".$limit."";
        $result = $this->mysql->query($query);
        $posts = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $post = new posts($row['id'],$row['category_id'],$row['title'],$row['intro'],'',$row['images'],$row['tag'],$row['description'],$row['count_conment'],$row['slug'],$row['active'],$row['date']);
                array_push($posts,$post);
            }
        }
        return $posts;
    }
    
    function getPostLatestNews(){
        $query =" SELECT * FROM post order by id ";
        $result = $this->mysql->query($query);
        $posts = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $post = new posts($row['id'],$row['category_id'],$row['title'],$row['intro'],$row['content'],$row['images'],$row['tag'],$row['description'],$row['count_conment'],$row['slug'],$row['active'],$row['date']);
                array_push($posts,$post);
            }
        }
        return $posts;
    }

    function getPostByLikeTitleLimit($limit,$name) {
        $query =" SELECT * FROM post WHERE title LIKE  '%".$name."%' limit ".$limit."";
        $result = $this->mysql->query($query);
        $posts = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $post = new posts($row['id'],$row['category_id'],$row['title'],$row['intro'],$row['content'],$row['images'],$row['tag'],$row['description'],$row['count_conment'],$row['slug'],$row['active'],$row['date']);
                array_push($posts,$post);
            }
        }
        return $posts;
    }

    function activePost(){
        $query = "UPDATE post SET category_id= $p->category_id, title ='$p->title', intro = '$p->intro', content = '$p->content', images = '$p->images', tag = '$p->tag', description = '$p->description', slug = '$p->slug', active = $p->active
                   WHERE id = $p->id";
        $result = $this->mysql->query($query);
        $flag = $result;
    }
    
    
}