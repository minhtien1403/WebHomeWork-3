<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = $_POST['id'];
  $old = $_POST['oldpass'];
  $new = $_POST['newpass'];
  
  $result = mysqli_query($conn, "select employee.password from employee WHERE id = $id");
     $employee = mysqli_fetch_assoc($result);
          if($old == $employee['password']){
            $sql = "UPDATE `employee` SET `password`='$new' WHERE id = $id";
            mysqli_query($conn, $sql);
             echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Cập Nhật Thành Công')
                window.location.href='myprofile.php?id=$id';</SCRIPT>"); 
          
        }

        else{
          echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Cập Nhật Thát Bại')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
        }

  
}
?>




<!-- <?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $old = $res['password'];
  echo "$old";
}
}

?> -->

<html>
<head>
  <title>Change Password | XYZ Corporation</title>
  <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
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
  

    <!-- <form id = "registration" action="edit.php" method="POST"> -->
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-3" style="height: 100vh;">
          <br><br><br>
          <div class="card">
            <div class="card-body">
              <div class="loginbox">
                  <h2 class="title">Cập Nhật Mật Khẩu</h2>
                    <form id = "registration" action="changepassemp.php" method="POST">
                          <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <p>Mật Khẩu Cũ</p>
                                     <input class="form-control" type="Password" name = "oldpass" required >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <p>Mật Khẩu Mới</p>
                                    <input class="form-control" type="Password" name="newpass" required>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn-primary" type="submit" name="update">Cập Nhật</button>
                        </div>
                        
                    </form>
                    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        


</body>
</html>
