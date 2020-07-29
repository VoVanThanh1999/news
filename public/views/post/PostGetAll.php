<!--------------------- Heade share -------------->

<?php
include_once('../public/views/Share/Header.php');
?>
<!------------------ End  Heade share -------------->
<!-- ----------------menu share---------------------->
<div id="listPost">
<?php
include_once('../public/views/Share/Menu.php');
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
                            <a class="btn btn-danger btn-shadow text-white">Bulk Delete <i class="fas fa-trash"></i></a>
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
                                ID
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
                        foreach ($data as $value) {
                            ?>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1"><?= $value->id ?></td>
                                <td><?= $value->category_id ?></td>
                                <td><?= $value->title ?></td>
                                <td><span><?= $value->images ?></span></td>
                                <td style="width: 100px;display: -webkit-box; -webkit-box-orient: vertical;"><?= $value->tag ?></td>
                                <td><?= $value->description ?></td>
                                <td style="width: 100px;display: -webkit-box; -webkit-box-orient: vertical;"><?= $value->slug ?></td>
                                <td class="text-center">
                                    <?php
                                    if ($value->active == 1) {
                                        ?>
                                        <input type="checkbox" id="exampleCheck1" onclick="activatePost(<?= $value->id ?>)" checked="checked" >
                                        <?php
                                    } else {
                                        ?>
                                        <input type="checkbox" onclick="activatePost(<?= $value->id ?>)" id="exampleCheck1" >
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
    $(document).ready(function () {
        $('#listData').dataTable();
    });
    function activatePost(id){
        alertify.confirm('Delete Comfirm', 'Are you sure to active data?', function () {
            activateRecord(id);
        }, function () {
            alertify.error('Cancel')
        });
    }
    function activateRecord(id){
        $.ajax({
            type: "DELETE",
            url: "./activePost/" + id,
            dataType: "html",
            success: function (html) {
                alertify.success('Activate');
                getAll();
            },
            error: function (req, status, error) {
                alert(error);
                alertify.error('Please try again');
            }
        });
    }
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
                getAll()
            },
            error: function (req, status, error) {
                alert(error);
            }
        });
    }

    function getAll() {
        $.ajax({
            type: "DELETE",
            url: "GetAll",
            dataType: "html",
            success: function (html) {
                $("div#listPost").empty();
                $("div#listPost").html(html);
            },
            error: function (req, status, error) {
                alert(error);
            }
        });
    }
</script>
<!-- -------- Footer share -------------- -->
<?php
include_once('../public/views/Share/Footer.php');
?>
<!-- ---------------End footer share --------------->
