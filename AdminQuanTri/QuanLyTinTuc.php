<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quản Lí Tin Tức Coffee</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="./JS/jquery-3.5.1.min.js"></script>
  
  <script src=".JS/jQuery-File-Upload-master/js/vendor/jquery.ui.widget.js"></script>
  <script src=".JS/jQuery-File-Upload-master/js/jquery.fileupload.js"></script>
	<script src="ckeditor/ckeditor.js"> </script>
	<script src="ckeditor/ckfinder/ckfinder.js"> </script>
  <script src="JS/admin.js"></script>
  <style>
    .tintuc {
    width: 100%;
    height: auto;
    margin-bottom: 50px;
}
.tintuc h1{
    margin : 70px 0;
}
.tintuc a{ 
    color: black;
    text-decoration: none;
    font-weight: bold;
}
.tintuc a:hover{
    color: #e1a02d;
    text-decoration: none;
}
.KhoiTinTuc{
    height: 300px;
    margin-bottom: 50px;
    position: relative;
}
.content{
    color: #707070;
    padding-top: 10px;
    font-size: 14px;
    line-height: 26px;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    display: -webkit-box;
}
.ThaoTac{
  position: absolute;
  top:0;
  z-index: 111;
  right: 0;
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include('./JS/jQuery-File-Upload-master/server/php/UploadHandler.php'); ?>
<?php require("Navbar.php");?>
  <?php require("MenuDanhMuc.php");?>  
<div class="content-wrapper" style="min-height: 1071.31px;    background-color: #fff">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Quản Lý Tin Tức Coffee</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Quản Trị Website</a></li>
            <li class="breadcrumb-item active"> Quản Lý Tin Tức Coffee</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

    <!-- Main content -->
    <section class="content">
      <a href="ThemTinTuc.php"><button type="button" class="btn btn-dark btn-lg">Thêm Mới Tin Tức Coffee</button></a>
      <div class="container">
                <div class="row">
                    <?php
                        require("KetNoiCSDL.php");
                        $SQL = "SELECT * FROM tintuc";
                        $result = $conn->query($SQL);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-xl-6 KhoiTinTuc">
                        <div class="row">
                            <div class="col-xl-6">
                                <img src="../IMG/<?=$row['HinhAnhTinTuc']?>" width="255px" height="255px"  alt="">
                            </div>
                            <div class="col-xl-6">
                                <p><i class ="fas fa-calendar-alt"></i>  <?=$row['NgayDangTin']?></p>
                                <h3><a href="ChiTietTinTuc.php?iDTinTuc=<?=$row['iDTinTuc']?>"><?=$row['TieuDe']?></a></h3>
                                <div class="content"><?=$row['NoiDung']?></div>
                            </div>
                            <div class='ThaoTac'>
                              <a href="XoaTinTuc.php?iDTinTuc=<?=$row['iDTinTuc']?>"><button type="button" class="btn btn-info">Xóa</button></a>
                              <a href="SuaTinTuc.php?iDTinTuc=<?=$row['iDTinTuc']?>"><button type="button" class="btn btn-secondary">Sửa</button></a>
                            </div>
                        </div>
                    </div>
                    <?php 

                            }
                        }
                    ?>
                    
                    
                    
                </div>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require("Footer.php");?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

