<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);


  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  $sql2 = "SELECT total from `salary` WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn , $sql2);
  $salary = mysqli_fetch_array($result2);
  $empS = ($salary['total']);
 
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
  $pic = $res['pic'];
}
}

?>

<html>
<head>
  <title>My Profile | XYZ Corporation</title>
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
        <div class="col-md-6" style="height: 100vh;">
          <br><br><br>
          <div class="card">
            <div class="card-body">
              <div class="loginbox">
                 <h2 class="title">Thông Tin Cá Nhân</h2>
                    <form method="POST" action="myprofileup.php?id=<?php echo $id?>" >

                        <div class="form-group">
                          <img src="process/<?php echo $pic;?>" height = 150px width = 150px>
                        </div>


                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Họ</label>
                                    <input id ="firstname" class="form-control" type="text" name="firstName" value="<?php echo $firstname;?>" readonly >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="lastname">Tên</label>
                                  <input id="lastname" class="form-control" type="text" name="lastName" value="<?php echo $lastname;?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <p>Email</p>
                            <input class="form-control" type="email"  name="email" value="<?php echo $email;?>" readonly>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <p>Ngày Sinh</p>
                                  <input class="form-control" type="text" name="birthday" value="<?php echo $birthday;?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <p>Giới Tính</p>
                                  <input class="form-control" type="text" name="gender" value="<?php echo $gender;?>" readonly>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                          <p>Điện Thoại Liên Lạc</p>
                            <input class="form-control" type="number" name="contact" value="<?php echo $contact;?>" readonly>
                        </div>

                        <div class="form-group">
                          <p>CMND</p>
                            <input class="form-control" type="number" name="nid" value="<?php echo $nid;?>" readonly>
                        </div>

                        
                         <div class="form-group">
                          <p>Địa Chỉ</p>
                            <input class="form-control" type="text"  name="address" value="<?php echo $address;?>" readonly>
                        </div>

                        <div class="form-group">
                          <p>Bộ Phận</p>
                            <input class="form-control" type="text" name="dept" value="<?php echo $dept;?>" readonly>
                        </div>

                        <div class="form-group">
                          <p>Trình Độ</p>
                            <input class="form-control" type="text" name="degree" value="<?php echo $degree;?>" readonly>
                        </div>


                        <div class="form-group">
                          <p>Tổng Lương</p>
                            <input class="form-control" type="text" name="degree" value="<?php echo $empS;?>" readonly>
                        </div>

                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required">
                        <!-- <div class="p-t-20">
                            <button class="btn btn--radius btn--green"  name="send" >Update Info</button>
                        </div> -->
                        
                    </form>
                    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

   


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
