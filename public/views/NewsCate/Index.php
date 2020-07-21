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
<div class="pt-4 pl-5">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cash icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    NewsCate Management
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
                        <a class="btn btn-primary btn-shadow text-white mr-2" href="/news/public/views/NewsCate/AddNewsCate.php">Add News <i class="fas fa-plus"></i></a>
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
                            Rendering
                            engine
                        </th>
                        <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Browser: activate to sort column ascending">ID
                        </th>
                        <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Platform(s): activate to sort column ascending">Title
                        </th>
                        <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Engine version: activate to sort column ascending">Summary
                        </th>
                        <th class="text-center" style="width: 150px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr role="row" class="odd">
                        <td tabindex="0" class="sorting_1">Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.7</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td tabindex="0" class="sorting_1">Gecko</td>
                        <td><span>Firefox 1.5added class="iffyTip" to the td and then added the following javascript to the bottom of the page to add tooltips containing the full text. -- /show tooltip if content is truncated $(document).on('mouseenter', ".iffyTip", function () { var $this = $(this); if (this.offsetWidth < this.scrollWidth && !$this.attr('title')) { $this.tooltip({ container: "body", title: $this.text(), placement: "bottom" }); $this.tooltip('show'); } }); – Matt Lengenfelder Novadded class="iffyTip" to the td and then added the following javascript to the bottom of the page to add tooltips containing the full text. -- /show tooltip if content is truncated $(document).on('mouseenter', ".iffyTip", function () { var $this = $(this); if (this.offsetWidth < this.scrollWidth && !$this.attr('title')) { $this.tooltip({ container: "body", title: $this.text(), placement: "bottom" }); $this.tooltip('show'); } }); – Matt Lengenfelder Nov</span>
                        </td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="odd">
                        <td tabindex="0" class="sorting_1">Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td tabindex="0" class="sorting_1">Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td>1.9</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td>1.7</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td>1.7</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete"
                                    href="javascript:void(0);" onclick="DeleteRecord()">Del <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td class="text-center"><a class="btn btn-primary btn-shadow text-white button-large-edit"
                                                   href="/news/public/views/NewsCate/Edit.php">Edit <i class="fas fa-edit"></i> </a> <a
                                    class="btn btn-warning btn-shadow text-white button-large-delete">Del <i
                                        class="fas fa-trash"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#listData').dataTable();
    });

    function DeleteRecord() {
        alertify.confirm('Delete Comfirm', 'Are you sure to delete selected data?', function () {
            alertify.success('Bulk Deleted');
        }, function () {
            alertify.error('Cancel')
        });
    }

    function DoDelete() {

    }
</script>
<!-- -------- Footer share -------------- -->
<?php
include_once('../Share/footer.php');
?>
<!-- ---------------End footer share --------------->
