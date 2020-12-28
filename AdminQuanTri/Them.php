
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
      <div class="container">
      <div class="jumbotron">
        <h1 class="text-center"> Thêm Mới Sản Phẩm Coffee</h1>
       <form action="#" method="POST" role="form" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Tên Coffee </label>
                <input type="text"
                  class="form-control" name="TenCoffee" id="TenCoffee"  placeholder="Nhập Tên Coffee">
              </div>
              <div class="form-group">
                <label for="">Loại Coffee </label>
                <select class="form-control" name="LoaiCoffee" id="LoaiCoffee">
                <?php
                    require("KetNoiCSDL.php");
                    $SQL = "SELECT * FROM LoaiCoffee";
                    $Result = $conn->query($SQL);
                    if ($Result->num_rows > 0) {
                        while($row1 = $Result->fetch_assoc()) {
                    ?>
                           <option value="<?=$row1["idLoai"]?>"><?=$row1["TenLoaiCoffee"]?></option>
                            <?PHP
                        }
                    }
              ?>
                </select>
              </div>
              <div class="form-group">
                <label for="">Hình Ảnh Coffee</label>
                <input type="file" class="form-control-file" name="txtAnh" placeholder="" aria-describedby="fileHelpId">   
              </div>
              
              <div class="form-group">
                <label for="">Mô Tả</label>
                <textarea class="form-control" name="MoTa" id="Mo_Ta" rows="3"></textarea>
              </div>
			          <script> var editor = CKEDITOR.replace('Mo_Ta'); </script>
              <div class="form-group">
                <label for="">Số Lượng</label>
                <input type="text"
                  class="form-control" name="SoLuong"  placeholder="Nhập Số Lượng">
              </div>
              <div class="form-group">
                <label for="">Gía</label>
                <input type="text"
                  class="form-control" name="Gia"  placeholder="Nhập Gía">
              </div>
              <div class="form-group">
                <label for="">Thương Hiệu</label>
                <input type="text"
                  class="form-control" name="ThuongHieu" id="ThuongHieu" placeholder="Nhập Thương Hiệu">
              </div>
              <div class="form-group">
                <label for="">Thông Tin</label>
                <input type="text"
                  class="form-control" name="ThongTin" id="ThongTin" placeholder="Nhập Thông Tin">
              </div>
             <input type="submit" name="submit" class="btn btn-success" value="Thêm Mới Dữ Liệu">
             </form>
            
             </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
      <?php 
      if(isset($_REQUEST['submit'])){
        require("ThuVien.php");
        require("KetNoiCSDL.php");
        $TenCoffee = $_POST['TenCoffee'];
        $LoaiCoffee = $_POST['LoaiCoffee'];
        $Anh = UploadFile("txtAnh", "IMG");
        $MoTa = $_POST['MoTa'];
        $SoLuong = $_POST['SoLuong'];
        $SoLuong = (int)$SoLuong;
        $Gia = $_POST['Gia'];
        $Gia = (double)$Gia;
        $ThuongHieu = $_POST['ThuongHieu'];
        $ThongTin = $_POST['ThongTin'];
        $sql = "INSERT INTO sanphamcoffee VALUES(NULL,$LoaiCoffee,'$TenCoffee','$MoTa','$Anh',$Gia, $SoLuong, '$ThongTin','$ThuongHieu', NULL)";
        // $KQ = $pdo_conn->exec($sql);
        if ($conn->query($sql) === TRUE) {
          echo'
            <div class="alert alert-success">
              <strong>Success!</strong> Thêm Thành Công!
            </div></a>';
        } else {
          echo'<div class="alert alert-danger">
          <strong>Danger!</strong>Thêm Thất Bại
        </div>';
        }
        $conn->close();
      }
          
?>
      
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

