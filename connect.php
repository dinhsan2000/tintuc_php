<?php
$ket_noi = mysqli_connect('localhost','root','','test');
if ($ket_noi->connect_error) {
    die("Connection failed: " . $ket_noi->connect_error);
    }
mysqli_set_charset($ket_noi, 'utf8');
?>
