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
                        Contacts Management
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
                            <a class="btn btn-primary btn-shadow text-white mr-2" href="createrViewsContact">Add News <i
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
                                aria-label="Browser: activate to sort column ascending">Họ tên
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Email
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Số ĐT
                            </th>                
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Reply
                            </th>
                            <th class="text-center" style="width: 150px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stt ++;
                        foreach ($data as $value) {
                            ?>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1 text-center"><?= $stt ++?></td>
                                <td ><?= $value->full_name ?></td>
                                <td ><?= $value->email ?></td>
                                <td ><?= $value->phone_number ?></td>
                                <td>
                                    <?php
                                    if ($value->active == 1) {
                                        ?>
                                        <input type="checkbox" id="status" checked="checked" style="pointer-events: none">
                                        <?php
                                    } else {
                                        ?>
                                        <input type="checkbox" id="status" style="pointer-events: none">
                                        <?php
                                    }
                                    ?>
                                </td>
                                
                                <td class="text-center"><a
                                            class="btn btn-primary btn-shadow text-white button-large-edit"
                                            href="getContactById/<?= $value->id ?>">Details <i class="fas fa-edit"></i> </a> <a
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

    function DeleteRecord(id) {
        alertify.confirm('Delete Comfirm', 'Are you sure to delete selected data?', function () {
            DoDelete(id);
        }, function () {
            alertify.error('Cancel')
        });
    }
    var href = window.location.href;
    function DoDelete(id) {
        $.ajax({
            type: "DELETE",
            url: "/news/admin/deleteContact/" + id,
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
