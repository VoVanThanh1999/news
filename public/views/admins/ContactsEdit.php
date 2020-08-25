<!--------------------- Heade share -------------->
<?php
include_once('public/views/Share/Header.php');
?>
<!------------------ End  Heade share -------------->
<!-- ----------------menu share---------------------->
<?php
include_once('public/views/Share/Menu.php');
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<!--            End menu share-->
<div class="pb-4">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cash icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                   Add Contacts
                </div>
            </div>
        </div>
    </div>
</div>
<form method="post"  action="/news/admin/updateContact">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-8">
            <table class="table table-borderless">
                <tbody>
                <tr>
                    <td><label for="Title" class="mt-2 float-right">Id</label></td>
                    <td><input name="id" id="id" placeholder="Please enter text" type="text" class="form-control" value="<?=$data->id?>" style="pointer-events: none;"></td>
                </tr>
                <tr>
                    <td><label for="Title" class="mt-2 float-right">Full Name</label></td>
                    <td><input name="full_name" id="title" placeholder="Please enter text" type="text" class="form-control" value="<?=$data->full_name?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Email</label></td>
                    <td> <input name="email" id="" placeholder="Please enter text" type="text" class="form-control" value="<?=$data->email?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Phone Number</label></td>
                    <td> <input name="phone_number" id="" placeholder="Please enter text" type="number" class="form-control" value="<?=$data->phone_number?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Title</label></td>
                    <td> <input name="title" id="" placeholder="Please enter text" type="text" class="form-control" value="<?=$data->title?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Content</label></td>
                    <td>  <textarea id="summernote" name="content"><?=$data->content?></textarea></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Status</label></td>
                    <td>
                    <?php
                        if($data->status == 1){
                    ?>
                            <input type="checkbox" name="status" value="1" id="status" checked="checked" >
                        <?php }
                        else{?>
                            <input type="checkbox" name="status" value="0" id="status" >
                      <?php  }?>
                    </td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Active</label></td>
                    <td>
                    <?php
                         if($data->active == 1){
                    ?>
                            <input type="checkbox" name="active"  id="active" value="1" checked="checked" >
                        <?php }
                        else{?>
                            <input type="checkbox" name="active"  id="active" value="0">
                      <?php  }?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == 0) {
                                echo 'Vui lòng không để trống';
                            }
                        }
                        ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Save" class="btn btn-success btn-shadow text-white mr-3 col-3" />
                        <a href="#" onclick="Reset()" class="btn btn-warning btn-shadow text-white  align-self-center mr-3 col-3  pt-2"><span>Reset</span> </a>
                        <a href="GetAllContact" class="btn btn-danger btn-shadow text-white align-self-center mr-3 col-3 pt-2"><span>Cancel</span> </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-3"></div>
    </div>
</form>
<script >
    $('#summernote').summernote({
        placeholder: 'Please enter...',
        tabsize: 2,
        dialogsInBody: true,
        height: 100,
    });
    $("#active").change(function(){
        if($("#active").prop("checked") ==true){
            $("#active").val("1");
        }
        else{
            $("#active").val("0");
        }
    });
    $("#status").change(function(){
        if($("#status").prop("checked") ==true){
            $("#status").val("1");
        }
        else{
            $("#status").val("0");
        }
    });
</script>s
<!-- -------- Footer share -------------- -->
<?php
include_once('public/views/Share/Footer.php');
?>
<!-- ---------------End footer share --------------->

