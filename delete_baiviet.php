<?php
include_once('connect.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM tintuc WHERE id='$id'";
if ($ket_noi->query($sql) === TRUE) {
echo "Xoá thành công!";
header('Location: ./index.php');
} else {
echo "Error updating record: " . $ket_noi->error;
}
$ket_noi->close();
}
?>