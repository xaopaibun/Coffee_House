<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chỉnh Sửa Thông Tin Modun Khối Chúng Tôi Là</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="ckeditor/ckeditor.js"> </script>
	<script src="ckeditor/ckfinder/ckfinder.js"> </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php require("Navbar.php");?>
<?php require("MenuDanhMuc.php");?>
<div class="content-wrapper" style="min-height: 1071.31px;    background-color: #fff">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chỉnh Sửa Phần Content Trang Web</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Quản Trị Website</a></li>
            <li class="breadcrumb-item active">Chỉnh Sửa Phần Content Trang Web</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<?php 
    //   $DuLieuContent = array(
    //     'HinhAnh' => array(
    //       'HinhAnh1' => 'http://localhost/CoffeeHouse/IMG/gallery_big.jpg',
    //       'HinhAnh2' => 'http://localhost/CoffeeHouse/IMG/gallery_1.jpg',
    //       'HinhAnh3' => 'http://localhost/CoffeeHouse/IMG/gallery_2.jpg',
    //       'HinhAnh4' => 'http://localhost/CoffeeHouse/IMG/gallery_3.jpg',
    //       'HinhAnh5' => 'http://localhost/CoffeeHouse/IMG/gallery_4.jpg',
    //     ),
    //     'ModunChungToiLa' => array(
    //       'TieuDe' =>'Chúng Tôi Là',
    //       'TenCuaHang' =>'Coffee House',
    //       'NgayMoCua' =>'Thứ hai đến Thứ bảy',
    //       'GioMoCua' => '8:30am - 11:00pm',
    //       'Hotline' => '18006750',
    //       'NoiDung' => 'Chúng tôi đi khắp thế giới để tìm kiếm cà phê tuyệt vời. Trong quá trình đó, chúng tôi phát hiện ra những hạt đậu đặc biệt và hiếm đến nỗi chúng tôi có thể chờ đợi để mang chúng về',
    //       'HinhAnh' =>'http://localhost/CoffeeHouse/IMG/bg_about.png',
    //     )
    //   );
      
    // $data = array();
    
    // array_push($data, $DuLieuContent);
    // $data = json_encode($data);
    // require("KetNoiCSDL.php");
    // $Query = "UPDATE  HOMEPAGEDATA SET GIATRITHUOCTINH = '$data' WHERE ID = 5";
    // $conn->query($Query);
    //  $conn->close();
     require("KetNoiCSDL.php");
     $Query = "SELECT GIATRITHUOCTINH FROM HOMEPAGEDATA WHERE ID = 5";
     $result = $conn->query($Query);
     $MangDuLieu = $result->fetch_assoc();
     $Data = $MangDuLieu['GIATRITHUOCTINH'];
     $Data = json_decode($Data,  true);
     echo "<pre>";
     var_dump($Data);
     echo "</pre>";
?>
    <!-- Main content -->
    <section class="content">
     
      <div class="container">
            <form action="#" method="POST" role="form" enctype="multipart/form-data">
              <div class="jumbotron">
                <div class="alert alert-warning" role="alert">
                  <h3 class="text-center">Cập Nhật Thông Tin Khối Modun Chúng Tôi Là</h3>
                </div>
                <div class="form-group">
                  <label for="">Nhập Tiêu Đề</label>
                  <input type="text"
                    class="form-control" value="" name="txtTenCuaHang" id=""  placeholder="Nhập Tiêu Đề">
                </div>
                <div class="form-group">
                  <label for="">Tên Cửa Hàng</label>
                  <input type="text"
                    class="form-control" value="" name="txtTenCuaHang" id=""  placeholder="Nhập Tên Cửa Hàng">
                </div>
                <div class="form-group">
                  <label for="">Giờ mở cửa </label>
                  <input type="text"
                    class="form-control" value="" name="txtTenCuaHang" id=""  placeholder="Nhập Gio Mở Cửa">
                </div>
                <div class="form-group">
                  <label for="">Hotline</label>
                  <input type="text" class="form-control" name="txtHotline" id="" placeholder="Nhập Số Hotline">   
                </div>
                <div class="form-group">
                  <label for="">Nội Dung Review</label>
                  <input type="text" class="form-control" name="txtHotline" id="" placeholder="Nhập Nội Dung Review">   
                </div>
                <div class="form-group">
                  <label for="">Chọn ảnh review </label>
                  <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                </div>
              </div>
              <div class="jumbotron">
                <div class="alert alert-info" role="alert">
                  <h3 class="text-center">Cập Nhật Hình ảnh Cửa Hàng</h3>
                </div>
                <div class="form-group">
                  <label for="">Chọn ảnh số 1 </label>
                  <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                </div>
                <div class="form-group">
                  <label for="">Chọn ảnh số 2 </label>
                  <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                </div>
                <div class="form-group">
                  <label for="">Chọn ảnh số 3 </label>
                  <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                </div>
                <div class="form-group">
                  <label for="">Chọn ảnh số 4 </label>
                  <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                </div>
              </div>
              
              <input type="submit" name="submit" class="btn btn-success btn-lg" value="Cập Nhật Content Modun Khối Chúng Tôi Là">
            </form>
            
          
      </div>
      <?php  
        require('KetNoiCSDL.php');
        require('ThuVien.php');
        if(isset($_REQUEST["submit"])){
          $txtTenCuaHang = $_REQUEST["txtTenCuaHang"];
          $txtGioMoCua = $_REQUEST["txtGioMoCua"];
      
          $txtHotline = $_REQUEST["txtHotline"];
          $SoLuong = $_REQUEST["txtSoLuong"];
          $SoLuong = (int)$SoLuong;
          $NoiDungMoTa = $_REQUEST["NoiDungMoTa"];
         
          $sql = "UPDATE sanphamcoffee SET TenCoffee = '$TenCoffee',
				NoiDungMoTa='$MoTa',HinhAnh = '$Anh', SoLuong = $SoLuong, Gia = $Gia WHERE idCoffee= $ID";
	        if( $conn->query($sql) === TRUE){
            echo'
            <div class="alert alert-success">
              <strong>Success!</strong> Sửa Thành Công!
            </div>';
          }
          
          else{
            echo'<div class="alert alert-danger">
            <strong>Danger!</strong>Sửa Thất Bại</a>
          </div>';
          }
        }
      ?>
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
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
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

