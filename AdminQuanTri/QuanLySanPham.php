<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quản trị Sản Phẩm</title>
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
          <h1> Quản Lý Sản Phẩm</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Quản Trị Website</a></li>
            <li class="breadcrumb-item active"> Quản Lý Sản Phẩm</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="hienthidata">
        <!-- <h1 class="text-center text-uppercase" style="text-shadow: 2px 2px 3px #FF0000;">Danh Sách Sản Phẩm Coffee</h1> -->
        <!-- <a href="ThemSanPham.php" ><button type="button" class="btn btn-dark themmoisanpham" >Thêm Mới Sản Phẩm</button></a> -->
        
        <a href="Them.php"><button type="button" class="btn btn-info btn-lg">Thêm Mới Sản Phẩm</button></a>
        <table class="table">
            <thead class="thead-dark text-center">
                <tr>
                    <th>STT</th>
                    <th style="width: 60px;">Tên Coffee</th>
                    <th  style="width: 90px;">Loại Coffee</th>
                    <th style="width: 270px;">Mô Tả Sản Phẩm</th>
                    <th>Hình ảnh</th>
                    <th style="width: 30px;">Số Lượng</th>
                    <th>Gía Bán</th>
                    <th  style="width: 110px;">Ngày Nhập</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody id="body_table">
            <?php 
                require("KetNoiCSDL.php");
                $SQL = "SELECT idCoffee,TenCoffee, NoiDungMoTa, HinhAnh, SoLuong, Gia, TenLoaiCoffee, NgayGioNhap FROM SANPHAMCOFFEE, LoaiCoffee WHERE sanphamcoffee.idLoai = loaicoffee.idLoai";
                $result = $conn->query($SQL);

                if ($result->num_rows > 0) {
                    // output data of each ro
                    $STT = 1;
                    while($row = $result->fetch_assoc()) {
                        ?>
                    <tr style="height: 80px;">
                        <td scope="row"><?=$STT?></td>
                        <td style="width: 50px;"><?=$row["TenCoffee"]?></td>
                        <td><?=$row["TenLoaiCoffee"]?></td>
                        <td style="
                        line-height: 36px;
                         -webkit-line-clamp: 3;
                          -webkit-box-orient: vertical;
                          overflow: hidden;
                          display: -webkit-box;"><?=$row["NoiDungMoTa"]?></td>
                        <td ><img width="100px" height="100px" src="IMG/<?=$row["HinhAnh"]?>" alt=""></td>
                        <td><?=$row["SoLuong"]?></td>
                        <td><?=$row["Gia"]?> VNĐ</td>
                        <td><?=$row["NgayGioNhap"]?></td>
                        <td><a data-href="<?=$row["idCoffee"]?>" class="NutXoa">  <button type="button" class="btn btn-primary btn-lg">Xóa</button></a><a class="NutSua" href="SuaSP.php?idCoffee=<?=$row["idCoffee"]?>">  <button type="button" class="btn btn-warning btn-lg">Sửa </button></a></td>
                    </tr>
                    <?php
                    $STT++;
                    }
                }
         ?>
    
          
            </tbody>
        </table>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
      
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

