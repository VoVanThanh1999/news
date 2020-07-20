<!--------------------- Heade share -------------->
<?php
include_once('../Share/header.php');
?>
<!------------------ End  Heade share -------------->
<!-- ----------------menu share---------------------->
<?php
include_once('../Share/menu.php');
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
                    Edit NewsCate
                </div>
            </div>
        </div>
    </div>
</div>
<form method="post" enctype="multipart/form-data" action="">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-8">
            <table class="table table-borderless">
                <tbody>
                <tr>
                    <td><label for="Title" class="mt-2 float-right">Title</label></td>
                    <td><input name="Title" id="title" placeholder="" type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">CreateDate</label></td>
                    <td> <input name="CreateDate" id="createDate" placeholder="placeholder" type="date" class="form-control"></td>
                </tr>
                <tr>
                    <td class="float-right d-flex align-items-start"><label for="Image" class="">Image</label></td>
                    <td>
                        <input name="Image" id="image" type="file" class="form-control-file" onchange="fucHidden()" multiple>
                        <img id="myid" src="#" alt="new image" style="display:none" />
                        <img id="myid2" src="/news/public/assets/images/up-img.png" alt="new image" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Save" class="btn btn-success btn-shadow text-white mr-3 col-3" />
                        <a href="javascript:void(0)" onclick="Reset()" class="btn btn-warning btn-shadow text-white  align-self-center mr-3 col-3  pt-2"><span>Reset</span> </a>
                        <a href="../NewsCate/index.php" class="btn btn-danger btn-shadow text-white align-self-center mr-3 col-3 pt-2"><span>Cancel</span> </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-3"></div>
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
include_once('../Share/footer.php');
?>
<!-- ---------------End footer share --------------->

