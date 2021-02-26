<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
header("Content-type: text/html; charset=utf-8");
$servername = "localhost";
$database = "qltv";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, 'UTF8');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }

 ?>

</body>
</html>