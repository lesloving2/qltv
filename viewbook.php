<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="table.css" />
  <title>Student Management</title>
</head>
<?php include('header.php'); ?>
    <div id="content">
    <table class="table table-bordered">
          <form action="thuesach.php" method="POST">
          <thead>       
            <tr>
              
              <th style="width:1px; text-align: center";>STT</th>
              <th>Hình Ảnh</th>
              <th>Tên Sách</th>
              <th>Tác Giả</th>
              <th>Giá Bán</th>
              <th style="width=10";>NXB</th>
              <th>Chọn</th>
              <th>Chỉnh sửa</th>

            </tr>
          </thead>
          <tbody>
          
            <?php

            include ('KetNoi.php');
            if (isset($_GET['search']) && $_GET['search'] == '') {
              echo '<script language="javascript">';
              echo 'alert("Mời bạn nhập tên sách ")';
              echo '</script>';
              exit;

              
            } 
            else
            {
              
              $dem = 0;
              $sql = "SELECT * FROM `book`";
              $recordset = mysqli_query($conn, $sql);
            while ($row =  mysqli_fetch_assoc($recordset)) {
                $dem++;
                $a = $row['TenSach'];

  echo "<tr>";
  echo "<td>$dem</td>";
  echo "<td><img src='". $row['Anh'] . "' alt='' height='100px' width='100px' margin-left='15px' /></td>";
  echo "<td>{$row['TenSach']}</td>";
  echo "<td>{$row['TacGia']}</td>";
  echo "<td>{$row['Gia']}</td>";
  echo "<td>{$row['NXB']}</td>";
  echo "<td><a href='thuesach.php?sach=".$row['TenSach']."'>Thêm vào giỏ hàng</a></td>";
  echo "<td><a href='sua.php?id=".$row['TenSach']."'>Sửa</a>&nbsp;<a href='xoa1.php?id=".$row['TenSach']."'>Xóa</a></td>";
 }
}
?>
</tbody>
</table>
<p align="right">
<td><button type="submit" name="thue">Thuê sách</button></td>
<button type="reset">Bỏ chọn tất cả</button>

</td>
</p>
</form>
</div>
<?php echo file_get_contents("duoi.php"); ?>
