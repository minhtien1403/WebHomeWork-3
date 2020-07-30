<?php

require_once ('process/dbh.php');
// $sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
// $result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$nid = mysqli_real_escape_string($conn, $_POST['nid']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);
	//$salary = mysqli_real_escape_string($conn, $_POST['salary']);

$result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`birthday`='$birthday',`gender`='$gender',`contact`='$contact',`nid`='$nid',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Cập Nhật Thành Công')
    window.location.href='viewemp.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
	$contact = $res['contact'];
	$address = $res['address'];
	$gender = $res['gender'];
	$birthday = $res['birthday'];
	$nid = $res['nid'];
	$dept = $res['dept'];
	$degree = $res['degree'];
	
}
}

?>

<html>
<head>
	<title>View Employee |  Admin Panel | XYZ Corporation</title>
	<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <!-- <link href="css/main.css" rel="stylesheet" media="all"> -->
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
    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6" style="height: 100vh;">
                    <br><br><br>
                    <div class="card">
                        <div class="card-body">
                            <div class="loginbox">
                             <h2 class="title">Cập nhật thông tin</h2>
                            <form id = "registration" action="edit.php" method="POST">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                             <input class="form-control" type="text" name="firstName" value="<?php echo $firstname;?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="lastName" value="<?php echo $lastname;?>">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="input-group">
                                    <input class="form-control" type="email"  name="email" value="<?php echo $email;?>">
                                </div><br>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="birthday" value="<?php echo $birthday;?>">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="gender" value="<?php echo $gender;?>">
                                        </div>
                                    </div>
                                </div><br>
                                
                                <div class="input-group">
                                    <input class="form-control" type="number" name="contact" value="<?php echo $contact;?>">
                                </div><br>

                                <div class="input-group">
                                    <input class="form-control" type="number" name="nid" value="<?php echo $nid;?>">
                                </div><br>

                                
                                 <div class="input-group">
                                    <input class="form-control" type="text"  name="address" value="<?php echo $address;?>">
                                </div><br>

                                <div class="input-group">
                                    <input class="form-control" type="text" name="dept" value="<?php echo $dept;?>">
                                </div><br>

                                <div class="input-group">
                                    <input class="form-control" type="text" name="degree" value="<?php echo $degree;?>">
                                </div>
                                <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br>
                                <div class="p-t-20" style="text-align: center;">
                                    <button class="btn btn-primary" type="submit" name="update">Xong</button>
                                </div>
                                
                            </form>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	

		<!-- <form id = "registration" action="edit.php" method="POST"> -->
	<!--  -->


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
