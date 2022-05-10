<?php

$tieu_de =$_POST['tieu_de'];

$noi_dung = $_POST['noi_dung'];

$anh = $_POST['anh'];
// $ket_noi = mysqli_connect('localhost','root','','test');
// mysqli_set_charset($ket_noi, 'utf8');
require './connect.php';
$sql = "INSERT INTO tintuc (tieude,noidung,anh) VALUES ('$tieu_de','$noi_dung','$anh')";
echo "$sql";
mysqli_query($ket_noi, $sql);
$loi = mysqli_error($ket_noi);