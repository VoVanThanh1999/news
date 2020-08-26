<?php 
include_once 'init.php';
class  post_controller extends model_and_view_post {

    function createPost(){
        $flag = false;
        echo "post";
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
                    $fileDestination = 'C:/xampp/htdocs/news/public/views/img/'.$fileNameNew;
                    $image = $fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    $flag = true;
                }else{ echo"You cannot upload files of the type";}
            }else{ echo"You cannot upload files of the type";}
        }
        elseif ($_POST['image'] !=""){
            $image = $_POST['image'];
            $flag = true;
        }
        else{ echo"You cannot upload files of the type"; }
        $id = $_POST['id'];
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
            if ($flag) {
                if($id == ""){
                    $post_sv->createPost(new posts("",$category_id,$title,$intro,$content,$image,$tag,$description,"",$slug,$active));
                    header('location: ./getAll');
                }
                else{
                    $post_sv->createPost(new posts($id,$category_id,$title,$intro,$content,$image,$tag,$description,"",$slug,$active));
                    header('location: ./getAll');
                }
            }else{
                echo "bạn phải upload ảnh";
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