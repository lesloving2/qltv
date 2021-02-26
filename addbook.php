<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include('header.php'); ?>
 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style type="text/css">

    </style> 
    
    <title>Book</title>
</head>

<div id="content">
<div class="container" style="border: 1px solid red; width: 40%;">
            
                <div class="form-group">
                    <label for="a">
                        <h6>Tên Sách:</h6>
                    </label>
                    <input type="text" name="a" class="form-control" placeholder="Enter name book" id="a">
                </div>
                <div class="form-group">
                    <label for="b">
                        <h6>Tác Giả: </h6>
                    </label>
                    <input type="text" name="b" class="form-control" placeholder="Enter author" id="b">
                </div>
                <div class="form-group">
                    <label for="c">
                        <h6>Giá: </h6>
                    </label>
                    <input type="number" name="c" class="form-control" placeholder="Enter price" id="c">
                </div>
                <div class="form-group">
                    <label for="d">
                        <h6>NXB: </h6>
                    </label>
                    <input type="text" name="d" class="form-control" placeholder="Enter product" id="d">
                </div>
                <div class="form-group">
                    <label for="Up ảnh sách">
                        <h6>Ảnh sách</h6>

<input type="file" name="fileUpload" value="">

</label>
</div>

<button type="submit" class="btn btn-primary" name="up">Save</button>
          
        </div>
    </div>
<?php  

include('KetNoi.php');
 if(isset($_POST['up']))
 {
    if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
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

$TenSach = $_POST['a'];
$TacGia = $_POST['b']; 
$Gia = $_POST['c']; 
$NXB = $_POST['d']; 
$sql = "INSERT INTO `book`(`TenSach`, `TacGia`, `Gia`, `NXB`, `Anh`) VALUES ('$TenSach','$TacGia','$Gia','$NXB','$url');";
$recordset = mysqli_query($conn, $sql);

}
if (!$recordset) {
    echo "Theem  KHONG thanh cong";
}
else
{
    echo "Theem thanh cong";
}
mysqli_close($conn);

}
}

?>

</form>

</html>
