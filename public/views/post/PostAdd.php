<!--------------------- Heade share -------------->
<?php
include_once('public/views/Share/Header.php');
?>
<!------------------ End  Heade share -------------->
<!-- ----------------menu share---------------------->
<?php
include_once('public/views/Share/Menu.php');
?>
<!--            End menu share-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<div class="pt-4 pl-4">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cash icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Add Post
                </div>
            </div>
        </div>
    </div>
</div>
<form method="post" enctype="multipart/form-data" action="/news/post_controller/createPost">
    <div class="row">
        <div class="col-12">
            <table class="table table-borderless">
                <tbody>
                <tr hidden="hidden">
                    <td><label for="Title" class="mt-2  float-right">id</label></td>
                    <td><input name="id" id="title" placeholder="Enter title...." type="text" value="" class="form-control col-6"></td>
                </tr>
                <tr>
                    <td><label for="Title" class="mt-2  float-right">Title</label></td>
                    <td>
                        <div class="form-group">
                            <select class="form-control col-6" id="categories" name="category_id">
                                <?php
                                $mysql = new mysqli("112.78.2.94", "vie65_dbwebsite", "qwerty123#!", "vie65506_dbwebsitenews");
                                $query = "SELECT * FROM categories";
                                $result = $mysql->query($query);
                                foreach ($result->fetch_all() as $items) {
                                        echo "<option value='$items[0]'>".$items[1]."</option>";
                                }
                                ?>

                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for="Title" class="mt-2  float-right">Title</label></td>
                    <td><input name="title" id="title" placeholder="Enter title...." type="text" value="" class="form-control col-6"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Intro</label></td>
                    <td> <input name="intro" id="createDate" placeholder="Enter intro..." type="text" value="" class="col-6 form-control"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Content</label></td>
                    <td> <textarea id="summernote" name="content"></textarea></td>
                </tr>
                <tr>
                    <td class="float-right d-flex align-items-start"><label for="Image" class="">Image</label></td>
                    <td>
                        <input name="file" id="file" type="file" class="form-control-file" onchange="fucHidden()" multiple>
                        <img id="myid" src="" alt="new image" style="display:none" />
                        <img id="myid2" src="/news/public/assets/images/up-img.png" alt="new image" />
                    </td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Tag</label></td>
                    <td><input name="tag" id="title" placeholder="Enter tag...." type="text" value="" class="form-control col-6"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Description</label></td>
                    <td><input name="description" id="title" placeholder="Enter description...." type="text" value="" class="form-control col-6"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Count comment</label></td>
                    <td><input name="count_comment" id="title" placeholder="Enter count comment...." type="number" value="" class="form-control col-6"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Slug</label></td>
                    <td><input name="slug" id="title" placeholder="Enter slug...." type="text" value="" class="form-control col-6"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Activate</label></td>
                    <td>
                            <input type="checkbox"  name="active" id="exampleCheck1" >
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Save" class="btn btn-success btn-shadow text-white mr-3 col-3" />
                        <a href="" class="btn btn-warning btn-shadow text-white  align-self-center mr-3 col-3  pt-2"><span>Reset</span> </a>
                        <a href="GetAll" class="btn btn-danger btn-shadow text-white align-self-center mr-3 col-3 pt-2"><span>Cancel</span> </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</form>
<script>
    $('#summernote').summernote({
        placeholder: 'Please enter...',
        tabsize: 2,
        dialogsInBody: true,
        height: 100,
    });
    function display(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (event) {
                $('#myid').attr('src', event.target.result)
                    .width(200);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function () {
        display(this);
    });
    function fucHidden() {
        document.getElementById('myid2').style.display = "none";
        document.getElementById('myid').style.display = "block";
    }
</script>
<!-- -------- Footer share -------------- -->
<?php
include_once('public/views/Share/Footer.php');
?>
<!-- ---------------End footer share --------------->

