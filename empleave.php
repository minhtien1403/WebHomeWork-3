<?php

require_once ('process/dbh.php');

//$sql = "SELECT * from `employee_leave`";
$sql = "Select employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status, employee_leave.token From employee, employee_leave Where employee.id = employee_leave.id order by employee_leave.token";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Employee Leave | Admin Panel | XYZ Corporation</title>
	<!-- <link rel="stylesheet" type="text/css" href="styleview.css"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">TMT Corp</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="aloginwel.php">Trang chủ</a>
		      </li>
		      <li class="nav-item">
		      	<a class="nav-link" href="addemp.php" >Thêm Nhân Viên</a>
		      </li>
		      <li class="nav-item">
		      	<a class="nav-link" href="viewemp.php">Xem Nhân Viên</a>
		      </li>
		      <li>
		      	<a class="nav-link" href="salaryemp.php">Bảng Lương</a>
		      </li>
		      <li>
		      	<a class="nav-link" href="empleave.php">Đơn nghỉ</a>
		      </li>
		      <li>
		      	<a class="nav-link" href="alogin.html">Đăng Xuất</a>
		      </li>
		  </div>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div class="container-fluid" id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">DANH SÁCH NHÂN VIÊN XIN NGHỈ</h2>
		<table class="table table-light table-striped table-bordered">
			<tr>
				<th scope="col">ID Nhân Viên</th>
				<th scope="col">Token</th>
				<th scope="col">Tên</th>
				<th scope="col">Ngày Bắt Đầu</th>
				<th scope="col">Ngày Kết Thúc</th>
				<th scope="col">Tổng Số Ngày</th>
				<th scope="col">Lý Do</th>
				<th scope="col">Trạng Thái</th>
				<th scope="col">Tùy Chọn</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {

				$date1 = new DateTime($employee['start']);
				$date2 = new DateTime($employee['end']);
				$interval = $date1->diff($date2);
				$interval = $date1->diff($date2);
				//echo "difference " . $interval->days . " days ";

					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['token']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td><a class=\"btn btn-primary\" href=\"approve.php?id=$employee[id]&token=$employee[token]\"  onClick=\"return confirm('Bạn có chắc chắn muốn đồng ý yêu cầu này không')\">Duyệt</a>  <a class=\"btn btn-danger\" href=\"cancel.php?id=$employee[id]&token=$employee[token]\" onClick=\"return confirm('Bạn có chắc chắn muốn từ chối yêu cầu này không?')\">Từ chối</a></td>";

				}


			?>

		</table>
		
	</div>
</body>
</html>