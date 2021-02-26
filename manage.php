<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
		<table class="table table-bordered">
					<form action="xuly.php" method="POST">
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
	echo "<td><input type='checkbox' value='' /><br /></td>";
	echo "<td><a href='sua.php?id=".$row['TenSach']."'>Sửa</a></td>";
	
  
	
}


}


?>

</tbody>
</table>
<p align="right">
	<td><button type="submit">Thuê sách</button></td>

<td>

	<button type="reset">Bỏ chọn tất cả</button>

</td>
</p>
</form>
</table>
</html>
