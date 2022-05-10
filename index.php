<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>trang chủ</h1>
<?php
require './connect.php';

$sql = "SELECT * FROM tintuc";
$ket_qua = mysqli_query($ket_noi, $sql);
?>
<a href="form.php">Thêm bài viết mới</a>
<table width="100%" border="1px">
    <tr>
        <th>Mã</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Ảnh</th>
        <th>Sửa</th>
        <th>Xoá</th>
    </tr>
    <?php foreach ($ket_qua as $tin_tuc) { ?>
    <tr>
        <td><?php echo $tin_tuc['id'] ?></td>
        <td><?php echo $tin_tuc['tieude'] ?></td>
        <td><?php echo $tin_tuc['noidung'] ?></td>
        <td>
            <img height="100px" src="<?php echo $tin_tuc['anh'] ?>" alt="">
        </td>
        <td> <a href="edit_baiviet.php?id=<?php echo $tin_tuc['id']; ?>">Sửa</a></td>
        <td><a href="delete_baiviet.php?id=<?php echo $tin_tuc['id']; ?>">Xoá</a></td>
    </tr>
    <?php } 
    mysqli_close($ket_noi);
    ?>
</table>
</html>
