<!DOCTYPE html>
<html>
<head>
<?php include("header.php");
?>
<link rel="stylesheet" type="text/css" href="sidebysidetable.css" />
<body>
	<?php
header("Content-type: text/html; charset=utf-8");
$servername = "localhost";
$database = "qltv";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$id = $_GET['id'];
$sql = "SELECT * FROM `book`where TenSach = '$id'";
$recordset = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($recordset);
if (isset($_FILES['fileUpload']))
{
if ($_FILES['fileUpload']['error'] > 0)
    {
        echo "<h4>Bạn chưa chọn file!<h4>";
}
    else 
{
$path = 'upload/';
$name = $_FILES['fileUpload']['name'];
$url = $path . $name;
move_uploaded_file($_FILES['fileUpload']['tmp_name'], $path . $name);
if(isset($_POST['update']))
{
$nameS = $row['TenSach'];
$tg   =	$row['TacGia'];
$cost = $row['Gia'];
$NXB  = $row['NXB'];
$sql = "UPDATE `book` SET `TenSach`='$nameS',`TacGia`='$tg',`Gia`='$cost',`NXB`='$NXB',`Anh`='$url' WHERE TenSach = '$id' ";
mysqli_query($conn, $sql) or die("địt con mẹ mày");
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
header("location:viewbook.php");
} else {
echo "Error updating record: " . $conn->error;
}
}
}
}
?>
<div id= "content">
<form action=""method="POST" enctype="multipart/form-data">
<table>
<tr>
		<th><h1>Sửa sách<h1><th>
		
	</tr>
	<tr>
		<td>TenSach</td>
		<td><input type="text" name="ten" placeholder="Nhập tên sách mới" id="$a" size="80" value="<?php echo($row['TenSach']) ?>"></td>
	</tr>
	<tr>
		<td>TacGia</td>
		<td><input type="text" name="tenG" placeholder="Nhập tên tác giả mới"id="$b"  value="<?php echo($row['TacGia']) ?>"></td>
	</tr>
	<tr>
		<td>Gia</td>
		<td><input type="text" name="Gia" placeholder="Nhập giá mới" id="c"  value="<?php echo($row['Gia']) ?>"></td>
	</tr>
	<tr>
		<td>NXB</td>
		<td><input type="text" name="nxb" placeholder="Nhập NXB mới" id="d"  value="<?php echo($row['NXB']) ?>"></td>
	</tr>
	<tr>
		
		<td colspan="2"><input type="file" name="fileUpload" value="">
			
</td>
</tr>
<td><button type="submit" name="update">Save</button><td>

</table>
</form>	
</div>
</body>
</html>