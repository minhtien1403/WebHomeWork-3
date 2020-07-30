<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Employee |  Admin Panel | XYZ Corporation</title>
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
		<br>
		<div class="container-fluid">
			
		
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">DANH SÁCH CHI TIẾT TOÀN BỘ NHÂN VIÊN</h2>
		<table class="table table-light table-striped table-bordered">
			<tr>

				<th align = "center" scope="col">ID Nhân Viên</th>
				<th align = "center" scope="col">Ảnh</th>
				<th align = "center" scope="col">Tên</th>
				<th align = "center" scope="col">Email</th>
				<th align = "center" scope="col">Ngày Sinh</th>
				<th align = "center" scope="col">Giới tính</th>
				<th align = "center" scope="col">Liên lạc</th>
				<th align = "center" scope="col">CMND</th>
				<th align = "center" scope="col">Địa Chỉ</th>
				<th align = "center" scope="col">Bộ Phận</th>
				<th align = "center" scope="col">Trình Độ</th>
				<th align = "center" scope="col">Điểm</th>				
				<th align = "center" scope="col">Tùy chọn</th>
			</tr>
		</div>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['birthday']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['contact']."</td>";
					echo "<td>".$employee['nid']."</td>";
					echo "<td>".$employee['address']."</td>";
					echo "<td>".$employee['dept']."</td>";
					echo "<td>".$employee['degree']."</td>";
					echo "<td>".$employee['points']."</td>";

					echo "<td><a class=\"btn btn-primary\" href=\"edit.php?id=$employee[id]\">Sửa</a>  <a class=\"btn btn-danger\" href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Xóa</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>