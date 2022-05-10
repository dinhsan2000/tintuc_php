<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once("connect.php"); ?>
<?php
	$id = -1;
	if (isset($_GET["id"])) {
		$id = intval($_GET['id']);
	}
	// Lấy ra nội dung bài viết theo điều kiện id
	$sql = "SELECT * FROM tintuc WHERE id = $id";
	// Thực hiện truy vấn data thông qua hàm mysqli_query
	$query = mysqli_query($ket_noi,$sql);
?>
			<?php 
				while ( $data = mysqli_fetch_array($query) ) {
			?>
				<h3><?php echo $data['noidung']; ?></h3></div></ br>

			<?php } ?>
			</div>
</body>
</html>