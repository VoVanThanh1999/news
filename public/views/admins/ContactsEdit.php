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
                  	Chi tiết Contact
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
                <tr hidden="hidden">
                    <td><input hidden="true" name="full_name" id="idContact" placeholder="Please enter text" type="text" class="form-control" value="<?=$data->id?>"></td>
                </tr>            
                <tr>
                    <td><label for="Title" class="mt-2 float-right">Full Name</label></td>
                    <td><input disabled="disabled" name="full_name" id="title" placeholder="Please enter text" type="text" class="form-control" value="<?=$data->full_name?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Email</label></td>
                    <td> <input disabled="disabled" name="email" id="emailClient" placeholder="Please enter text" type="text" class="form-control" value="<?=$data->email?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Phone Number</label></td>
                    <td> <input disabled="disabled" name="phone_number" id="" placeholder="Please enter text" type="number" class="form-control" value="<?=$data->phone_number?>"></td>
                </tr>
                <tr>
                    <td> <label for="CreateDate" class="mt-2 float-right">Title</label></td>
                    <td> <input disabled="disabled"  name="title" id="titleContact" placeholder="Please enter text" type="text" class="form-control" value="<?=$data->title?>"></td>
                </tr>
                <tr>
                    <td> <label for="content" class="mt-2 float-right">Content</label></td>
                    <td>  <input class="form-control" id="content"  name="content" value="<?php echo $datas->content?>"></td>
                </tr>
                <tr>
                	<?php
                        if($data->active == 1){
                           echo " <td> <label for='content' class='mt-2 float-right'>Reply</label></td>";
                           echo " <td><textarea  class='form-control' id='content'  name='' >".$datas->reply." </textarea></td>";
                        }else{
                            echo " <td> <label for='content' class='mt-2 float-right'>Reply</label></td>";
                            echo " <td><textarea  class='form-control' id='summernote'  name='' > </textarea></td>";
                        }
                     ?>
                
                </tr>
               
                <tr>
                    <td></td>
                    <td><?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == 0) {
                                echo 'Vui lòng không được để trống';
                            }
                        }
                        ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input id="reply"  value="Reply" class="btn btn-success btn-shadow text-white mr-3 col-3" />
                        <a href="/news/admin/GetAllContact" class="btn btn-danger btn-shadow text-white align-self-center mr-3 col-3 pt-2"><span>Cancel</span> </a>
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
            $("#active").prop("checked",true) ;
        }
        else{
            $("#active").val("0");
            $("#active").prop("checked",false) ;
        }
    });
    $("#status").change(function(){
        if($("#status").prop("checked") ==true){
            $("#status").val("1");
            $("#status").prop("checked",true);
        }
        else{
            $("#status").val("0");
            $("#status").prop("checked",false);
        }
    });

    $('#reply').click(function(){
    	var c = confirm("Xác nhận reply !");
    	if (c==true) {
        	debugger;
			var idContact = $('#idContact').val();
			var subject = $('#titleContact').val();
			var content = $('#content').val();
			var mailClient = $('#emailClient').val();
			var Object = {'idContact':idContact,'subject':subject,'content':content,'mailClient':mailClient};
			var urlResource = 'localhost/news/contacts_controller/reply_email';
			
			$.ajax({
				url: '/news/contacts_controller/reply_email',
				data:Object,
				method:'POST'
		
				
			}).done(function(result) {
				alert(result);
			});
		}
    });
</script>
<!-- -------- Footer share -------------- -->
<?php
include_once('public/views/Share/Footer.php');
?>
<!-- ---------------End footer share --------------->

