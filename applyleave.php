<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `employee` where id = '$id'";
	$result = mysqli_query($conn, $sql);
	$employee = mysqli_fetch_array($result);
	$empName = ($employee['firstName']);
	//echo "$id";
?>

<html>
<head>
	<title>Apply Leave | Employee Panel | XYZ Corporation</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body bgcolor="#F0FFFF">
	
	<header>
		 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	      <a class="navbar-brand" href="#">TMT Corp</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item active">
	            <a class="nav-link" href="eloginwel.php?id=<?php echo $id?>"">Trang chủ</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="myprofile.php?id=<?php echo $id?>"" >Hồ Sơ</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="changepassemp.php?id=<?php echo $id?>"" >Đổi mật khẩu</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="applyleave.php?id=<?php echo $id?>"">Xin nghỉ</a>
	          </li>
	          <li>
	            <a class="nav-link" href="elogin.html">Đăng Xuất</a>
	          </li>
	         
	      </div>
	    </nav>
	</header>
	<div class="divider"></div>
	<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-5" style="height: 100vh;">
					<br><br><br>
					<div class="card">
						<div class="card-body">
							<div class="loginbox">
							    <h2 class="title">Xin Nghỉ</h2>
			                    <form action="process/applyleaveprocess.php?id=<?php echo $id?>" method="POST">
			                        <div class="form-group">
			                        	<p>Lí Do</p>
			                            <input class="form-control" type="text" placeholder="Lí do" name="reason">
			                        </div>
			                        <div class="form-row">
			                            <div class="col-md-6">
			                            	<p>Ngày Bắt Đầu</p>
			                                <div class="form-group">
			                                    <input class="form-control" type="date" placeholder="start" name="start">		                   
			                                </div>
			                            </div>
			                            <div class="col-md-6">
			                            	<p>Ngày Kết Thúc</p>
			                                <div class="form-group">
			                                    <input class="form-control" type="date" placeholder="end" name="end">
			                                   
			                                </div>
			                            </div>
			                        </div>
			                        <div class="p-t-20">
			                            <button class="btn btn-primary" type="submit">Gửi</button>
			                        </div>
			                    </form>
						        
						</div>
					</div>
				</div>
			</div>
		</div>
		<table class="table table-light table-bordered table-striped">
			<tr>
				<th align = "center">ID</th>
				<th align = "center">Tên</th>
				<th align = "center">Ngày Bắt Đầu</th>
				<th align = "center">Ngày Kết Thúc</th>
				<th align = "center">Tổng Số Ngày</th>
				<th align = "center">Lý Do</th>
				<th align = "center">Trạng Thái</th>
			</tr>


			<?php
				$sql = "Select employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status From employee, employee_leave Where employee.id = $id and employee_leave.id = $id order by employee_leave.token";
				$result = mysqli_query($conn, $sql);
				while ($employee = mysqli_fetch_assoc($result)) {
					$date1 = new DateTime($employee['start']);
					$date2 = new DateTime($employee['end']);
					$interval = $date1->diff($date2);
					$interval = $date1->diff($date2);

					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
					
				}


			?>
		</table>

	</div>
</body>
</html>