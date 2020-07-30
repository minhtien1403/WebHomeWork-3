<?php

require_once ('process/dbh.php');
$sql = "SELECT employee.id,employee.firstName,employee.lastName,salary.base,salary.bonus,salary.total from employee,`salary` where employee.id=salary.id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Salary Table | XYZ Corporation</title>
<!-- 	<link rel="stylesheet" type="text/css" href="styleview.css"> -->
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
		
	
	<br>
	<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">BẢNG LƯƠNG NHÂN VIÊN</h2>
	<table class="table table-light table-striped table-bordered">
			<tr>
				<th align = "center" scope="col">ID Nhân viên</th>
				<th align = "center" scope="col">Tên</th>
				
				
				<th align = "center" scope="col">Lương cơ bản</th>
				<th align = "center" scope="col">Thưởng</th>
				<th align = "center" scope="col">Tổng Lương</th>
				
				
			</tr>
	</div>
			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['base']."</td>";
					echo "<td>".$employee['bonus']." %</td>";
					echo "<td>".$employee['total']."</td>";	
				}


			?>
			
			</table>
</body>
</html>