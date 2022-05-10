<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require ('connect.php');
$sql = "SELECT * FROM tintuc";
$ket_qua = mysqli_query($ket_noi, $sql);
//while($row=mysqli_fetch_array($ket_qua)){
?>
    <table border="1px" width="100%">
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Ảnh</th>
        </tr>
    </table>
<?php foreach ($ket_qua as $row) { ?>
<tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['tieude'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td>
        <img src="<?php echo $row['anh'] ?>" width="100px" alt="">
    </td>
</tr>
<?php } ?>
</body>
</html>