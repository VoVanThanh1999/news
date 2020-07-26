<?php 
class  post_controller extends model_and_view_post {
    function createPost(){
        $flag = false;
        $image = "";
        $files = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
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
                    $fileDestination = 'C:\xampp\upload\\'.$fileNameNew;
                    $image = $fileDestination;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    $flag = true;
                }else{
                    echo"You cannot upload files of the type";
                 
                }
            }else{
                echo"You cannot upload files of the type";
              
            }
        }else{
            echo"You cannot upload files of the type";
        
        }    
        $category_id = $_POST['category_id'];
        $title = $_POST['title'];
        $intro = $_POST['intro'];
            $content = $_POST['content'];
        $tag = $_POST['tag'];
        $description = $_POST['description'];
        $post_sv=new post_service();
        $slug = $post_sv->to_slug($_POST['slug']);
        if ($flag) {
            $post_sv->createPost(new posts("",$category_id,$title,$intro,$content,$image,$tag,$description,"",$slug,0));
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
   
    
}