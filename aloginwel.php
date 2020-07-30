<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel | XYZ Corporation</title>
	<!-- <link rel="stylesheet" type="text/css" href="styleemplogin.css"> -->
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
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">BẢNG XẾP HẠNG NHÂN VIÊN</h2>
    	<table class="table table-light table-striped table-bordered">

			<tr bgcolor="#000">
				<th align = "center" scope="<col>">STT</th>
				<th align = "center" scope="<col>">ID</th>
				<th align = "center" scope="<col>">TÊN</th>
				<th align = "center" scope="<col>">ĐIỂM</th>
				

			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['points']."</td>";
					
					$seq+=1;
				}


			?>

		</table>

		<div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="reset.php" style="text-decoration: none; color: white"> Reset Points</button>
		</div>

		
	</div>
</body>
</html>