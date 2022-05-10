<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
// Kết nối Database
include ("connect.php");
$id = $_GET['id'];
$sql = "SELECT * FROM tintuc WHERE id='$id'";
$ket_qua = mysqli_query($ket_noi, $sql);
?>
<?php foreach ($ket_qua as $row) {  ?>
<form method="POST" class="form">
<h2>Sửa bài viết</h2>
<label>Mã: <input type="text" value="<?php echo $row['id']; ?>" name="id"></label><br/>
<label>Tiêu đề: <input type="text" value="<?php echo $row['tieude']; ?>" name="tieude"></label><br/>
<label>Nội dung: <input type="text" value="<?php echo $row['noidung']; ?>" name="noidung"></label><br/>
<label>Ảnh: <input type="text" value="<?php echo $row['anh']; ?>" name="anh"></label><br/>
<input type="submit" value="Update" name="update_baiviet">
<?php
if (isset($_POST['update_baiviet'])){
$id=$_GET['id'];
$tieude=$_POST['tieude'];
$noidung=$_POST['noidung'];
var_dump($noidung);
echo "<pre>";
$anh=$_POST['anh'];
$sql = "UPDATE `tintuc` SET tieude='$tieude', noidung='$noidung', anh='$anh' WHERE id='$id'";
echo "$tieude";
if ($ket_noi->query($sql) === TRUE) {
echo "Record updated successfully";
header('Location: ./index.php');
} else {
echo "Error updating record: " . $ket_noi->error;
}
$ket_noi->close();
}
}
?>
?>
</form>
</body>
</html>