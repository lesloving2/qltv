<!DOCTYPE html>
<html>
<head>

	<title>Student Management</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->


	<!-- Popper JS -->


	<!-- Latest compiled JavaScript -->

	<style type="text/css">
		

	
	</style>
	<style type="text/css">
        table, th, td{
            border-top:1px solid #ccc;
            border-bottom:1px solid #ccc;
        }
        table{
            border-collapse:collapse;
            width:100%;
        }
        th, td{
            text-align:left;
            padding:10px;
        }
    </style>


</head>
<body class="bg-image">
	<div class="container" >
		<div class="panel panel-primary">
			<div style="color: red; text-align: center; margin-bottom: 30px; " class="panel-heading">
				<h1 style="margin-bottom: 50px;">Quản lý thông tin sách</h1>
				<form method="get">
					<input type="text" name="search" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên">
				</form>
			</div>
			<div class="panel-body">
				<table style="width:100%;height:300px">
					<thead>
						<tr>
							
							<th style="width=10;">STT</th>
							<th>Hình Ảnh</th>
							<th>Tên Sách</th>
							<th>Tác Giả</th>
							<th>Giá Bán</th>
							<th style="width=10";>NXB</th>
							<th style="width=10";>abc<th>
							
						</tr>
					</thead>
					<tbody>
						<?php
						include ('KetNoi.php');
						if (isset($_GET['search']) && $_GET['search'] == '') {
							echo '<script language="javascript">';
							echo 'alert("Mời bạn nhập tên sách ")';
							echo '</script>';
					
							
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
	echo "<td><img src='". $row['Anh'] . "' alt='' height='100px' width='100px' /></td>";
	echo "<td>{$row['TenSach']}</td>";
	echo "<td>{$row['TacGia']}</td>";
	echo "<td>{$row['Gia']}</td>";
	echo "<td>{$row['NXB']}</td>";
	echo "<td><a href='sua.php''>Sửa</a></td>";
	echo "<td><a href='xoa1.php?id=$a'>Xóa</a></td>";

	}


						}
?>
</tbody>
</table>

