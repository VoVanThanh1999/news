
<p>
    <?php
    if (isset($_GET['r'])) {
        if ($_GET['r'] == 1) {
            echo 'Thành công';
        } else{
            echo 'Không thành công';
        }
    }
    ?>
</p>
<form action="../categories_controller/add" method="post">
    <table border="1">
        <tr>
            <th>STT</th>
            <th>id</th>
            <th>name</th>
            <th>tag</th>
            <th>desc</th>
            <th>icon</th>
            <th>slug</th>
            <th>active</th>

        </tr>
        <?php
        $i = 1;
        foreach ($datas as $item){
            ?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$item->id?></td>
                <td><?=$item->name?></td>
                <td><?=$item->tag?></td>
                <td><?=$item->description?></td>
                <td><?=$item->icon?></td>
                <td><?=$item->slug?></td>
                <td><?=$item->active?></td>


            </tr>
            <?php
        }
        ?>
    </table>
</form>