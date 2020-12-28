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
          <h1>Chỉnh Sửa Phần Header Trang Web</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Quản Trị Website</a></li>
            <li class="breadcrumb-item active">Chỉnh Sửa Phần Header Trang Web</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <?php 
    //   $dataheader = array(
    //     'loichao' => 'Chào mừng bạn đến với Coffee House !',
        
    //     'menu' => array(
    //         'item1' => array(
    //             'tieude' => 'Trang Chủ',
    //             'link' => 'index.php',
    //         ),
    //         'item2' => array(
    //             'tieude' => 'Gioi Thiệu',
    //             'link' => 'GioiThieu.php',
    //         ),
    //         'item3' => array(
    //             'tieude' => 'Sản Phẩm',
    //             'link' => 'TatCaSanPham.php',
    //         ),
    //         'item4' => array(
    //             'tieude' => 'Dịch Vụ',
    //             'link' => 'DichVu.php',
    //         ),
    //         'item5' => array(
    //             'tieude' => 'Tin Tức',
    //             'link' => 'TinTuc.php',
    //         ),
    //         'item6' => array(
    //             'tieude' => 'Liên Hệ',
    //             'link' => 'LienHe.php',
    //         ),
    //     ),
    //     'backgroudimage' =>"slider_1.jpg",
    // );
   
    // $data = array();
    
    // array_push($data, $dataheader);
    // $data = json_encode($data);
    // require("KetNoiCSDL.php");
    // $Query = "UPDATE  HOMEPAGEDATA SET GIATRITHUOCTINH = '$data' WHERE ID = 4";
    // $conn->query($Query);
    //  $conn->close();


    require("KetNoiCSDL.php");
    $Query = "SELECT GIATRITHUOCTINH FROM HOMEPAGEDATA WHERE ID = 4";
    $result = $conn->query($Query);
    $MangDuLieu = $result->fetch_assoc();
    $Data = $MangDuLieu['GIATRITHUOCTINH'];
    $Data = json_decode($Data,  true);
    // echo "<pre>";
    // var_dump($Data);
    // echo "</pre>";
    // $Data= array('MangData'=>$Data);
    $menu = array();
    $tml = 1;
    foreach ($Data as $key => $value) { 
     
      
      array_push($menu,$value['menu']);
} 
$menu_json = array();
foreach($menu as $key => $v){
      array_push($menu_json,$v['item1']);
      array_push($menu_json,$v['item2']);
      array_push($menu_json,$v['item3']);
      array_push($menu_json,$v['item4']);
      array_push($menu_json,$v['item5']);
      array_push($menu_json,$v['item6']);
   } 
// var_dump($menu_json);


  ?>
  
    <!-- Main content -->
    <section class="content">
     
      <div class="container">
            <form action="#" method="POST" role="form" enctype="multipart/form-data">
              <?php 
                  foreach ($Data as $key => $value) {
              ?>
            <div class="jumbotron">
                <div class="alert alert-dark" role="alert">
                <h3 class="text-center">Cập Nhật Lời Chào Welcome</h3>
              </div>
              <div class="form-group">
                <label for="">Nhập Lời Chào</label>
                <input type="text"
                  class="form-control" value="<?=$value['loichao']?>" name="txtLoiChao" id=""  placeholder="Nhập Lời Chào">
              </div>
            </div>
          <?php } ?>
              
            <div class="jumbotron">
                <div class="alert alert-dark" role="alert">
                <h3 class="text-center">Cập Nhật Menu</h3>
              </div>
              <?php 
              $stt = 1;
                  foreach ($menu_json as $key => $value) {
              ?>
              <div class="form-group">
                <label for="">Nhập Tiêu Đề Item <?php echo $stt; ?></label>
                <input type="text"
                  class="form-control" value="<?=$value['tieude']?>" name="txttieude<?php echo $stt; ?>" id=""  placeholder="Nhập Lời Chào">
              </div>
              <div class="form-group">
                <label for="">Nhập Link Item <?php echo $stt; ?></label>
                <input type="text"
                  class="form-control" value="<?=$value['link']?>" name="txtlink<?php echo $stt; ?>" id=""  placeholder="Nhập Lời Chào">
              </div>
              <?php $stt++;} ?>
              
              <div class="form-group">
                <label for="">Cập Nhật LoGo</label>
                <input type="file" class="form-control-file" name="Logo" id="" placeholder="" aria-describedby="fileHelpId">
                
              </div>
              
            </div>
            <div class="jumbotron">
              <div class="alert alert-dark" role="alert">
              <h3 class="text-center">Cập Nhật BackgroudImage</h3>
            </div>
            <div class="form-group">
              <label for="">Chọn BackgroudImage</label>
            
               <input type="file" class="form-control-file" name="txtBackgroudimage" id="" placeholder="" aria-describedby="fileHelpId">
               
            
            </div>
          </div>
         
            <button type="submit" name="submit_form" class="btn btn-info btn-lg">Cập Nhật Header</button>

            </form>
          
      </div>
      <?php 
      require("ThuVien.php");
        if(isset($_REQUEST['submit_form'])){
          $TieuDe1 = $_POST['txttieude1'];
          $TieuDe2 = $_POST['txttieude2'];
          $TieuDe3 = $_POST['txttieude3'];
          $TieuDe4 = $_POST['txttieude4'];
          $TieuDe5 = $_POST['txttieude5'];
          $TieuDe6 = $_POST['txttieude6'];
          $Link1 = $_POST['txtlink1'];
          $Link2 = $_POST['txtlink2'];
          $Link3 = $_POST['txtlink3'];
          $Link4 = $_POST['txtlink4'];
          $Link5 = $_POST['txtlink5'];
          $Link6 = $_POST['txtlink6'];
          $LoiChao = $_POST['txtLoiChao'];
          $AnhNen = UploadFile("txtBackgroudimage", "IMG");
          $Logo = UploadFile("Logo", "IMG");
          $dataheader = array(
                'loichao' => ''.$LoiChao.'',
                
                'menu' => array(
                    'item1' => array(
                        'tieude' => ''.$TieuDe1.'',
                        'link' => ''. $Link1.'',
                    ),
                    'item2' => array(
                        'tieude' => ''.$TieuDe2.'',
                        'link' => ''. $Link2.'',
                    ),
                    'item3' => array(
                        'tieude' => ''.$TieuDe3.'',
                        'link' => ''. $Link3.'',
                    ),
                    'item4' => array(
                        'tieude' => ''.$TieuDe4.'',
                        'link' => ''. $Link4.'',
                    ),
                    'item5' => array(
                        'tieude' => ''.$TieuDe5.'',
                        'link' => ''. $Link5.'',
                    ),
                    'item6' => array(
                        'tieude' => ''.$TieuDe6.'',
                        'link' => ''. $Link6.'',
                    ),
                ),
                'backgroudimage' =>''.$AnhNen.'',
                'Logo' =>''.$Logo.'',
            );
           
            $data = array();
            
            array_push($data, $dataheader);
            $data = json_encode($data);
            require("KetNoiCSDL.php");
            $Query = "UPDATE  HOMEPAGEDATA SET GIATRITHUOCTINH = '$data' WHERE ID = 4";
           
            if ($conn->query($Query) === TRUE) {
              echo '<div class="alert alert-success">
              <strong>Success!</strong> Cập Nhật Thành Công!
            </div>';
            } else {
              echo '<div class="alert alert-danger">
              <strong>Danger!</strong>Cập Nhật Thất Bại
            </div>';
            }
             $conn->close();
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

