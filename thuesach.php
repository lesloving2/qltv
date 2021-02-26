<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include ('KetNoi.php');

if (isset($_GET['sach']))
{
	$id = $_GET['sach'];
$sql = "SELECT * FROM `book`where TenSach = '$id'";
$recordset = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($recordset)) {
	$a = $row['TenSach'];
	$b = $row['TacGia'];
	$c = $row['Gia'];
	$d = $row['NXB'];
	$e = $row['Anh'];
	echo "<tr>";
	
	echo "<td>{$row['TenSach']}</td>";
	echo "<td>{$row['TacGia']}</td>";
	echo "<td>{$row['Gia']}</td>";
	echo "<td>{$row['NXB']}</td>";
	echo "<td><img src='". $row['Anh'] . "' alt='' height='100px' width='100px' margin-left='15px' /></td>"; 
			
	}

$file = 'upload/data.txt';
if(file_exists($file))
{
	$a = fopen($file, 'a');
	fwrite($a, $a ."". $b)

}

}

?>
</body>
</html>