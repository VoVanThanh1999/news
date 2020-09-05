<?php 
include_once 'init.php';
class  post_controller extends model_and_view_post {

    function createPost(){
        $id = $_POST['id'];
        $flag = false;
        $image = "";
        $files = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        echo $fileName;
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','jpeg','png','pdf');
        if (in_array($fileActualExt,$allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = '/news/public/views/img/'.$fileNameNew;
                    $image = $fileNameNew;
                        move_uploaded_file($fileTmpName,$fileDestination);
                    $flag = true;
                }else{header('location: /news/post_controller/ViewAddPost?error=2');}
            }else{ header('location: /news/post_controller/ViewAddPost?error=2');}
        }
        elseif ($_POST['image'] !=""){
            $image = $_POST['image'];
            $flag = true;
        }
        else{ header('location: /news/post_controller/ViewAddPost?error=2'); }
        $category_id = $_POST['category_id'];
        $title = $_POST['title'];
        $intro = $_POST['intro'];
        $content = $_POST['content'];
        $tag = $_POST['tag'];
        $description = $_POST['description'];

        if (isset($_POST['active'])) $active = 1;
        else  $active = 0;
        $post_sv=new post_service();
        $slug = $post_sv->to_slug($_POST['slug']);
        if($title !="" && $category_id != "" && $intro !="" && $content !=""){
            if ($flag) {
                if($id == ""){
                    $date = date("Y/m/d");
                    $post_sv->createPost(new posts("",$category_id,$title,$intro,$content,$image,$tag,$description,"",$slug,$active,$date));
                    header('location: ./getAll');
                }
                else{
                    $date = date("Y/m/d");
                    $post_sv->createPost(new posts($id,$category_id,$title,$intro,$content,$image,$tag,$description,"",$slug,$active,$date));
                    header('location: ./getAll');
                }
            }else{
                if($id == ""){
                    header('location: /news/post_controller/ViewAddPost?error=0');
                }
                else{
                    header('location: /news/post_controller/getById/'.$id.'?error=0');
                }

            }
        }
        else{
            if($id == ""){
                header('location: /news/post_controller/ViewAddPost?error=1');
            }
            else{
                header('location: /news/post_controller/getById/'.$id.'?error=1');
            }
        }

    }
    function deletePost($idpost){
        $post_sv=new post_service();
        return $post_sv->deletePost($idpost);
    }
    
    function activePost($idpost){
        $post_sv=new post_service();
        return  $post_sv->activePost($idpost);
    }
    
    function getAll(){
        $postDAO = new post_repository();
        $posts = $postDAO->getAll();
        $this->view('PostGetAll', $posts);
    }
    
    function getById($id) {
        $postDAO = new post_repository();
        $post = $postDAO->getById($id);
        $this->view('PostEdit', $post);
        
    }
   function ViewAddPost(){
        $this->view('PostAdd', "");
    }
}