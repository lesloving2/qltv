<!DOCTYPE html>
<html>
<head>
	<title>Student Management</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.bg-image {
			/* The image used */
			background-image: url("https://images.vov.vn/w720/uploaded/ecbl3qs6xrm/2017_11_23/lib_7_owgf.jpg");
		}

		th,td{
			color: #fff;
		}

	</style>


</head>
<body class="bg-image">
	<div class="container" >
		<div class="panel panel-primary">
			<div style="color: white; text-align: center; margin-bottom: 30px; " class="panel-heading">
				<h1 style="margin-bottom: 50px;">Quản lý thông tin sách</h1>
				<form method="get">
					<input type="text" name="search" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên Sách</th>
							<th>Tác Giả</th>
							<th>Giá Bán</th>
							<th>Nhà Sản Xuất</th>
							<th width="60px"></th>
							<th width="60px"></th>
						</tr>
					</thead>