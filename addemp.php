<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Add Employee | Admin Panel</title>

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
                <a class="nav-link" href="alogin.php">Đăng Xuất</a>
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
                                 <h2 class="title">Thông tin đăng ký</h2>
                                    <form action="process/addempprocess.php" method="POST" enctype="multipart/form-data">                   
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                     <input class="form-control" type="text" placeholder="Họ" name="firstName" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" placeholder="Tên" name="lastName" required="required">
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="input-group">
                                            <input class="form-control" type="email" placeholder="Email" name="email" required="required">
                                        </div>
                                        <br>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input class="form-control" type="date" placeholder="BIRTHDATE" name="birthday" required="required">
                                                   
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-group">
                                                    <!-- <div class="rs-select2 js-select-simple select--no-search"> -->
                                                        <select name="gender" class="form-control">
                                                            <option disabled="disabled" selected="selected">Giới Tính</option>
                                                            <option value="Nam">Nam</option>
                                                            <option value="Nữ">Nữ</option>
                                                            <option value="Khác">Khác</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>
                                        
                                        <div class="input-group">
                                            <input class="form-control" type="number" placeholder="Điện Thoại" name="contact" required="required" >
                                        </div><br>

                                        <div class="input-group">
                                            <input class="form-control" type="number" placeholder="CMND" name="nid" required="required">
                                        </div><br>

                                        
                                         <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Địa Chỉ" name="address" required="required">
                                        </div><br>

                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Bộ Phận" name="dept" required="required">
                                        </div><br>

                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Trình Độ" name="degree" required="required">
                                        </div><br>

                                        <div class="input-group">
                                            <input class="form-control" type="number" placeholder="Lương" name="salary">
                                        </div><br>

                                        <div class="input-group">
                                            <input class="form-control" type="file" placeholder="file" name="file">
                                        </div><br>
                                        <div class="p-t-20">
                                            <button class="btn btn-primary" type="submit">Thêm</button>
                                        </div>
                                    </form>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
