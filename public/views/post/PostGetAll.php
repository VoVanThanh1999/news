<!--------------------- Heade share -------------->

<?php
include_once('public/views/Share/Header.php');
?>
<script>   $(document).ready(function () {
        $('#listData').dataTable();
    });</script>
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
                        Post Management
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
                            <a class="btn btn-primary btn-shadow text-white mr-2" href="ViewAddPost">Add News <i
                                        class="fas fa-plus"></i></a>
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
                                aria-label="Engine version: activate to sort column ascending">Category
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Browser: activate to sort column ascending">Title
                            </th>

                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Images
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Tag
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Description
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Engine version: activate to sort column ascending">slug
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Engine version: activate to sort column ascending">active
                            </th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stt =1;
                        foreach ($data as $value) {
                            ?>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1 text-center"><?= $stt ++ ?></td>
                                <?php

                                    $mysql = new mysqli("112.78.2.36", "vie65_dbwebsite", "qwerty123#!", "vie65506_dbwebsitenews");
                                    $query = "SELECT name FROM categories WHERE id = $value->category_id";
                                    $result = $mysql->query($query);
                                    if(!empty($result->fetch_all())){
                                        $result = $mysql->query($query);
                                        foreach ($result->fetch_all() as $items) {
                                            echo("<td>$items[0]</td>");
                                        }
                                    }
                                    else{
                                        echo("<td style='color: #d33333'> thể loại này đã bị xóa</td>");
                                    }
                                ?>
                                <td><span><?= $value->title ?></span></td>
                                <td><img src="/news/public/views/img/<?= $value->images ?>" alt=""></td>
                                <td style="width: 100px;display: -webkit-box; -webkit-box-orient: vertical;"><?= $value->tag ?></td>
                                <td><span><?= $value->description ?></span></td>
                                <td style="width: 100px;display: -webkit-box; -webkit-box-orient: vertical;"><?= $value->slug ?></td>
                                <td class="text-center">
                                    <?php
                                    if ($value->active == 1) {
                                        ?>
                                        <input type="checkbox" id="exampleCheck1" onclick="activatePost(<?= $value->id ?>)" checked="checked" style="pointer-events: none" >
                                        <?php
                                    } else {
                                        ?>
                                        <input type="checkbox" onclick="activatePost(<?= $value->id ?>)" id="exampleCheck1" style="pointer-events: none">
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-primary btn-shadow text-white button-large-edit"
                                       href="getById/<?= $value->id ?>">Edit <i class="fas fa-edit"></i> </a> <a
                                            class="btn btn-warning btn-shadow text-white button-large-delete"
                                            href="javascript:void(0);" onclick="DeleteRecord(<?= $value->id ?>)">Del <i
                                                class="fas fa-trash"></i></a>

                                </td>
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

    var href = window.location.href;
    // function activatePost(id){
    //     alertify.confirm('Active Comfirm', 'Are you sure to active data?', function () {
    //         activateRecord(id);
    //     }, function () {
    //         alertify.error('Cancel')
    //     });
    // }
    // function activateRecord(id){
    //     $.ajax({
    //         type: "DELETE",
    //         url: "./activePost/" + id,
    //         dataType: "html",
    //         success: function (html) {
    //             alertify.success('Activate');
    //             getAll();
    //         },
    //         error: function (req, status, error) {
    //             alert(error);
    //             alertify.error('Please try again');
    //         }
    //     });
    // }
    function DeleteRecord(id) {
        alertify.confirm('Delete Comfirm', 'Are you sure to delete selected data?', function () {
            DoDelete(id)
        }, function () {
            alertify.error('Cancel')
        });
    }

    function DoDelete(id) {
        $.ajax({
            type: "DELETE",
            url: "./deletePost/" + id,
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
</script>
<!-- -------- Footer share -------------- -->
<?php
include_once('public/views/Share/Footer.php');
?>
<!-- ---------------End footer share --------------->
