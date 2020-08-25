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
<div class="pb-4 ">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cash icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Edit NewsCate
                </div>
            </div>
        </div>
    </div>
</div>
<form method="post" enctype="multipart/form-data" action="/news/admin/updateNewsCate">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-8">
            <table class="table table-borderless">
                <tbody>
                <tr>
                    <td><label for="Title" class="mt-2 float-right">ID</label></td>
                    <td><input name="id" id="title" placeholder="Please enter text" type="text" class="form-control" value="<?= $data->id?>" style="pointer-events: none;"></td>
                </tr>
                <tr>
                    <td><label for="Title" class="mt-2 float-right">Name</label></td>
                    <td><input name="name" id="title" placeholder="Please enter text" type="text" class="form-control" value="<?= $data->name?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Tag</label></td>
                    <td> <input name="tag" id="createDate" placeholder="Please enter text" type="text" class="form-control" value="<?= $data->tag?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Description</label></td>
                    <td> <input name="description" id="createDate" placeholder="Please enter text" type="text" class="form-control" value="<?= $data->description ?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Icon</label></td>
                    <td> <input name="icon" id="createDate" placeholder="Please enter text" type="text" class="form-control" value="<?= $data->icon ?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Slug</label></td>
                    <td> <input name="slug" id="createDate" placeholder="Please enter text" type="text" class="form-control" value="<?= $data->slug ?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Activate</label></td>
                    <td><?php
                        if($data->active == 1){
                            ?>
                            <input type="checkbox" name="active"  id="exampleCheck1" checked="checked" >
                            <?php
                        }
                        else{
                            ?>
                            <input type="checkbox"  name="active" id="exampleCheck1" >
                            <?php
                        }
                        ?>
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
                        <a href="javascript:void(0)" onclick="Reset()" class="btn btn-warning btn-shadow text-white  align-self-center mr-3 col-3  pt-2"><span>Reset</span> </a>
                        <a href="NewsCateGetAll" class="btn btn-danger btn-shadow text-white align-self-center mr-3 col-3 pt-2"><span>Cancel</span> </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-3"></div>
    </div>
</form>
<!-- -------- Footer share -------------- -->
<?php
include_once('public/views/Share/Footer.php');
?>
<!-- ---------------End footer share --------------->

