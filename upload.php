 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>upload file- toidicode.com</title>
    <link rel="stylesheet" href="">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload" value="">
    <input type="submit" name="up" value="Upload">

<?php
include('KetNoi.php');

if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
    if ($_FILES['fileUpload']['error'] > 0)
    {
        echo "Upload lỗi rồi!";
    }
    else 
        {
$path = 'upload/';
$name = $_FILES['fileUpload']['name'];
$url = $path . $name;
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], $path . $name);
        echo "upload thành công <br/>";
        echo 'Dường dẫn:'.$path . $name . '<br>';
        echo 'Loại file: ' . $_FILES['fileUpload']['type'] . '<br>';
        echo 'Dung lượng: ' . ((int)$_FILES['fileUpload']['size'] / 1024) . 'KB';
        echo '' . $url . '';

    $sql = "SELECT * FROM `book`"
;    $recordset = mysqli_query($conn, $sql);
    $sql = "INSERT INTO book (`TenSach`, `TacGia`, `Gia`, `NXB`, `Anh`) VALUES ('AasdasdC', 'Nam', '300','HAnoi','$url')";
    $record = mysqli_query($conn, $sql);

}
}
?>
</form>
</body>
</html>