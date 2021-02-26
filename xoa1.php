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
if (isset($_GET['id']))
{
$id = $_GET['id'];
$sql = mysqli_query($conn, "DELETE FROM book WHERE TenSach = '$id'")
or die ; 
$recordset = mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: viewbook.php");
}
else
{
	echo "không thêm được";
}

?>

</body>
</html>