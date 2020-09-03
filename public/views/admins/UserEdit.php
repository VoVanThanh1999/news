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
<div class="pt-4 pl-4">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cash icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Edit User
                </div>
            </div>
        </div>
    </div>
</div>
<?php

?>

<form method="post" action="/news/admin/createrUser">
    <div class="row m-0">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-borderless">
                <tbody>
                <tr hidden="hidden">
                    <td><label for="Title" class="mt-2 float-right">id</label></td>
                    <td><input name="id" id="title" placeholder="Enter title...." type="text" value="<?=$data->id?>" style="pointer-events: none;" class="form-control col-6"></td>
                </tr>
                <tr>
                    <td><label for="Title" class="mt-2 float-right">Name</label></td>
                    <td><input name="name" id="" placeholder="" type="text" class="form-control" value="<?=$data->name?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Email</label></td>
                    <td> <input name="email" id="" placeholder="placeholder" type="text" value="<?=$data->email?>" class="form-control"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">PassWord</label></td>
                    <td> <input name="pass_word" id="" placeholder="Fogot Pass" type="text" value="" class="form-control"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Gender</label></td>
                    <td>
                        <select class="form-control" name="gender" id="exampleFormControlSelect1">
                            <?php
                            if($data->gender = 0){?>
                                <option value="0" selected>Nam</option>
                                <option value="1" >Nữ</option>
                        <?php
                         } else{
                            ?>
                                <option value="0" >Nam</option>
                                <option value="1" selected>Nữ</option>

                        <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Date Of Birth</label></td>
                    <td> <input name="date_of_birth" id="createDate" placeholder="placeholder" type="date" value="<?=$data->date_of_birth?>" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == 0) {
                                echo 'Vui lòng không để trống bất kì trường nào';
                            } else if($_GET['error'] == 1){
                                echo 'mail đã tồn tại vui lòng thử email khác';
                            } else if($_GET['error'] == 1){
                                echo 'Sửa password thành công';
                            }
                            else{
                                echo 'vui lòng kiểm tra lại password';
                            }
                        }
                        ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Save" class="btn btn-success btn-shadow text-white mr-3 col-3" />
                        <a href=""class="btn btn-warning btn-shadow text-white  align-self-center mr-3 col-3  pt-2"><span>Reset</span> </a>
                        <a href="../UserGetAll" class="btn btn-danger btn-shadow text-white align-self-center mr-3 col-3 pt-2"><span>Cancel</span> </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</form>
<script>
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

