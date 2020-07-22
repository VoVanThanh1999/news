
<table>
    <tr>
        <th>Id</th>
        <th>Mã Môn Học</th>
        <th>Lần Thi</th>
        <th>Điểm Thi</th>
        <th>Chức Năng</th>
        <th>Chức Năng</th>
        <th>Chức Năng</th>
    </tr>
    <?php
    foreach ($data as $value) {
        ?>
        <tr>
            <td><?= $value->id ?></td>
            <td><?= $value->name ?></td>
            <td><?= $value->tag ?></td>
            <td><?= $value->description ?></td>
            <td><?= $value->icon?></td>
            <td><?= $value->slug ?></td>
            <td><?= $value->active ?></td>

<!--            <td>-->
<!--                <a href="index.php?c=DiemThanhPhan&a=Sua&ma_sv=--><?//=$item->ma_sv?><!--">Sửa</a>-->
<!--            </td>-->
        </tr>
        <?php
    }
    ?>
</table>