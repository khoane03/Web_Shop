<h2>List product</h2>
<?php
$lietke_sp = "SELECT * FROM tbl_sanpham ";
$data = mysqli_query($mysql, $lietke_sp);
?>
<table>
    <tr>
        <th>ID</th>
        <th>Tên SP</th>
        <th>Giá</th>
        <th>Thao tác</th>
    </tr>
    <?php 
    $i = 0;
    while ($row = mysqli_fetch_array($data)) {
        $i++;
    ?>
    <tr>
        <td><?php echo $i  ?></td>
        <td><?php echo $row['tensp']  ?></td>
        <td><?php echo $row['giasp']  ?></td>
        <td><a href="">Edit</a> | <a href="">Delete</a></td>
    </tr>
    <?php 
    }
    ?>
</table>