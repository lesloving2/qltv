<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?

include ('KetNoi.php');
if (isset($_GET['TenSach'])) {
	$id = $_GET['TenSach'];
}
else
{
	echo "NO";
}
	$sql = "delete from book where TenSach = '$id'";
	if ($conn -> query($sql))
    {
    	echo "can";
    }
    else{
     echo "cant";
    }


?>
</body>
</html>
$sql = mysqli_query($conn, "DELETE FROM book WHERE TenSach = '$id'")
or die ; 
$recordset = mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: tesst.php");
}