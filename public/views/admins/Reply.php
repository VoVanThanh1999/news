<!--------------------- Heade share -------------->
<?php
include_once('public/views/Share/Header.php');
?>
<!------------------ End  Heade share -------------->
<!-- ----------------menu share---------------------->
<div id="listPost">
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
                        Reply Management
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pl-3 pr-3">
        <div class="app-main__inner">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="example1_length">
                        <label>
<!--                            <a class="btn btn-primary btn-shadow text-white mr-2" href="createrViewsContact">Add Comment <i-->
<!--                                        class="fas fa-plus"></i></a>-->
<!--                            <a class="btn btn-danger btn-shadow text-white">Bulk Delete <i class="fas fa-trash"></i></a>-->
                        </label>
                    </div>
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-body">
                    <table id="listData" class="table table-bordered table-striped dataTable dtr-inline " role="grid"
                           aria-describedby="example1_info">
                        <thead>
                        <tr role="row">

                            <th class="sorting_asc text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                STT
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Browser: activate to sort column ascending">User
                            </th>

                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Contact
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Title
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Message
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Date
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stt = 1;
                        foreach ($data as $value) {
                            ?>

                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1 text-center"><?= $stt++ ?></td>
                                <?php
                                if($value->userID ==0){
                                   echo("<td >client</td>");
                                }
                                else{
                                    $mysql = new mysqli("112.78.2.36", "vie65_dbwebsite", "qwerty123#!", "vie65506_dbwebsitenews");
                                    $query = "SELECT name FROM users WHERE id = $value->userID";
                                    $result = $mysql->query($query);
                                    foreach ($result->fetch_all() as $items) {
                                        echo("<td> $items[0]</td>");
                                    }
                                }
                                ?>
                                <?php
                                    $mysql = new mysqli("112.78.2.36", "vie65_dbwebsite", "qwerty123#!", "vie65506_dbwebsitenews");
                                    $query = "SELECT full_name FROM contacts WHERE id = $value->contactID";
                                    $result = $mysql->query($query);
                                    if(!empty($result->fetch_all())){
                                        $result = $mysql->query($query);
                                        foreach ($result->fetch_all() as $items) {
                                            echo("<td>$items[0]</td>");
                                        }
                                    }
                                    else{
                                        echo("<td style='color: #d33333'> bài viết đã bị xóa</td>");
                                    }
                                ?>
                                <td><span><?= $value->title ?></span></td>
                                <td><span><?= $value->message ?></span></td>
                                <td class="text-center"><span><?= $value->dateCreate ?></span></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#listData').dataTable();
    });
    var href = window.location.href;
        function DeleteRecord(id) {
        alertify.confirm('Delete Comfirm', 'Are you sure to delete selected data?', function () {
            DoDelete(id);
        }, function () {
            alertify.error('Cancel')
        });
    }
    function DoDelete(id) {
        $.ajax({
            type: "DELETE",
            url: "/news/admin/deleteComment/" + id,
            dataType: "html",
            success: function (html) {
                alertify.success('Deleted');
                window.location.href = href;
            },
            error: function (req, status, error) {
                alert(error);
            }
        });
    }
    // function getAll() {
    //     $.ajax({
    //         type: "DELETE",
    //         url: "/news/admin/GetAllComment",
    //         dataType: "html",
    //         success: function (html) {
    //             $("div#listPost").empty();
    //             $("div#listPost").html(html);
    //         },
    //         error: function (req, status, error) {
    //             alert(error);
    //         }
    //     });
    // }
</script>
<!-- -------- Footer share -------------- -->
<?php
include_once('public/views/Share/Footer.php');
?>
<!-- ---------------End footer share --------------->
