<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'san');
define('DB_PASSWORD', '123456789');
define('DB_NAME', 'san');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$sql = 'CREATE DATABASE sinhvien';
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "Ket noi mysql thanh cong";
?>