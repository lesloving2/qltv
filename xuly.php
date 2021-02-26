<?php
include ('KetNoi.php');
$Uname = $_POST['name'];
$pass = $_POST['pass'];
$Fname = $_POST['Fname'];
$phone = $_POST['sdt'];
$email = $_POST['email'];
$id = $_POST['id'];
$a = $_POST['pass2'];
    if (!$Uname || !$pass || !$Fname || !$phone || !$email)
    {
        echo "Mời bạn điền đầy đủ thông tin ";
    }
     if ($_POST['pass'] != $_POST['pass2']) 
     {
         echo "bạn xác nhận sai mật khẩu r :D. <a href='javascript: history.go(-1)'>Trở lại</a>";  
         exit;
    }
$result = mysqli_query($conn, "SELECT * FROM user WHERE name = '".$_POST['name']."' OR email = '".$_POST['email']."'");
if (mysqli_num_rows($result) != "") 
{
    echo "Tài khoản hoặc email đã tồn tại"; 
    exit;   # code...
}
    else  
    {
    
    $sql = "SELECT * FROM `user`";
    $recordset = mysqli_query($conn, $sql);
    $sql = "INSERT INTO user (name, pass, phone, email, hoten, Ltaikhoan) VALUES ('$Uname', '$pass', '$phone', '$email', '$Fname', '$id')";
    if (!mysqli_query($conn, $sql)) 
    {
      echo "New record created successfully";
      mysqli_close($conn);
      
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

$conn = null;
?>