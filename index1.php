<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>trang chủ</h1>
<?php
require 'connect.php';
$sql = "SELECT * FROM tintuc";
$ket_qua = mysqli_query($ket_noi, $sql)
?>
<table>
    <tr>
        <th>Mã</th>
        <th>Tiêu đề</th>
        <th>ảnh</th>
    </tr>
    <?php foreach ($ket_qua as $noi_dung) {?>
        <tr>
            <td><?php echo $noi_dung['id'] ?></td>
            <td><?php echo $noi_dung['tieude'] ?></td>
            <td><?php echo $noi_dung['anh'] ?></td>
        </tr>
        <?php } ?>
</table>
</body>
</html>