<?php 
   session_start();
?>
 <?php 
      // if(!isset($_SESSION["user"])){
      //   echo "<script language='javascript'>alert('Bạn chưa đăng nhập. Mời bạn đăng nhập để mua hàng');";
      //   echo "location.href='DangNhap.php';</script>";
      // }
?> 
<!doctype html>
<html lang="en">
  <head>
    <title>Giỏ Hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>
    <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
    <link rel="stylesheet" href="CSS/main.css">
    <script src="JAVASCRIPT/main.js"></script>
</head>
  <body>
    <div class="headertop">
        <?php require("Header.php");?>
    </div>
    <?php
    //echo $_POST['DatHang'];
      require("KetNoiCSDL.php");
        if(!isset($_SESSION['GioHang'])){
          $_SESSION['GioHang'] = array();
        }
        if(isset($_GET['action'])){
          function update_cart($add = false) {
            foreach ($_POST['DatHang'] as $id => $SP) {
                if ($SP == 0) {
                    unset($_SESSION["GioHang"][$id]);
                } else {
                    if ($add) {
                        $_SESSION["GioHang"][$id] = $SP;
                    } else {
                        $_SESSION["GioHang"][$id] += $SP;
                    }
                }
            }
        }
          switch($_GET['action']){
            case 'add':
              update_cart(true);
              break;
            case 'delete':
              if($_GET['id']){
                unset($_SESSION['GioHang'][$_GET['id']]);
              }
              break;
            case "submit":
                if (isset($_POST['Update_SoLuongSP'])) { //Cập nhật số lượng sản phẩm
                    update_cart();
                }
                // else if(isset($_POST['submit_dathang'])){
                //   $Tong = 0;
                //     $SanPhamDatHang = array();
                //     $SQL = "SELECT * FROM SanPhamCoffee WHERE idCoffee IN(".implode(',', array_keys($_SESSION['GioHang'])).")";
                //     $result = $conn->query($SQL);
                //     $TaiKhoan =  $_SESSION['user'];
                //     $SQL2 = "SELECT * FROM NguoiDunG WHERE Gmail = '$TaiKhoan'";
                //     $Result = $conn->query($SQL2);
                //     $row2 = $Result->fetch_assoc();
                //     $idKH = $row2['iDNguoiDung'];
                   
                //     while($row = $result->fetch_array()){
                //       $SanPhamDatHang[] = $row;
                //       $Tong = $row['Gia'] * $_SESSION['GioHang'][$row['idCoffee']];
                //     }
                //     $insertDonDatHang = "INSERT INTO `dondathang` (`iDDonDatHang`, `NgayDat`, `iDNguoiDung`, `TinhTrang`, `TongTien`) VALUES (NULL, current_timestamp(), ".$idKH.", 'Đang xử lý', ".$Tong.");";
                //     $result = $conn->query($insertDonDatHang);
                //     $IdDonDatHang = $conn->insert_id;
                //     $insertString = "";
                //     foreach ($SanPhamDatHang as $key => $sanpham){
                //       $insertString .= "('".$sanpham['idCoffee']."',".$IdDonDatHang.", ".$_SESSION['GioHang'][$row['idCoffee']].", 5555)";
                //       if ($key != count($SanPhamDatHang) - 1) {
                //         $insertString .= ",";
                //     }
                //     $insertOrder = "INSERT INTO `chitietdondathang` (`iDCoffee`, `iDDonDatHang`, `SoLuong`, `DonGia`) VALUES ".$insertString." ";
                //     $result = $conn->query($insertOrder);
                    
                //     echo "<script language='javascript'>alert('Bạn đã đặt hàng thành công');";
                //     echo "location.href='index.php';</script>";
                //     unset($_SESSION["GioHang"]);
                //     }
                //   }

                // break;
            }
        }


        
        //var_dump(implode(',', array_keys($_SESSION['GioHang'])));
        if(!empty($_SESSION['GioHang'])){
          $SQL = "SELECT * FROM SanPhamCoffee WHERE idCoffee IN(".implode(',', array_keys($_SESSION['GioHang'])).")";
          $result = $conn->query($SQL);
        }
     ?>
     <div class="GioiThieu">
        <h1>Giỏ Hàng Của Bạn</h1>
        <div class="container" style="margin-top: 50px;" >
          <?php 
          if(empty($_SESSION["GioHang"])){
            echo "<div class='alert alert-danger'>
            <strong>Không có sản phẩm nào trong giỏ hàng. </strong> Mời bạn quay lại shop để tiếp tục mua sắm.
          </div>";
          }
          else{
          ?>
          <form action="GioHang.php?action=submit" method="POST"> 
            <table class="table table-hover">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>
                        <th>Thông Tin Sản Phẩm</th>
                        <th>Đơn Gía</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Xóa SP</th>
                    </tr>
                </thead>
                <tbody>
                  
                  <?php 
                      $STT = 1;
                      $Tong = 0;   
                      while($row = $result->fetch_assoc()) {
                  ?>
                    <tr class="text-center">
                        <td scope="row"><?=$STT?></td>
                        <td><img width="100px" height="100px" src="AdminQuanTri/IMG/<?=$row['HinhAnh']?>" alt=""></td>
                        <td><?=$row['TenCoffee']?></td>
                        <td><?=number_format($row['Gia'], 0, ',', '.')?> VNĐ</td>
                        <td style="width: 100px;"><input readonly="false" type="text" class="form-control botron" value = "<?=$_SESSION['GioHang'][$row['idCoffee']]?>" name="<?=$SP[$row['idCoffee']]?>" id=""></td>
                        <td><?=number_format($row['Gia']*$_SESSION['GioHang'][$row['idCoffee']], 0, ',', '.')?> VNĐ</td>
                        <td><a href="GioHang.php?action=delete&id=<?=$row['idCoffee']?>" class="btn btn-warning btn-lg">Xóa</a></td>
                    </tr>
                   
                    <?php 
                     $STT++;
                     $Tong += $row['Gia'] * $_SESSION['GioHang'][$row['idCoffee']]; 
                     } ?>

                    <tr>
                        <td scope="row"><button type="submit" class="btn btn-light btn-lg" name="Update_SoLuongSP">Cập Nhật</button></td>
                        <td>&nbsp</td>
                        <td><b>Tổng Tiền</b></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td><b><?=number_format($Tong, 0, ',', '.')?> VNĐ</b></td>
                        <td>&nbsp</td>
                    </tr>
                </tbody>
            </table>
        </form>
        <button type="submit" class="btn btn-secondary btn-lg nutdienthongtindathang" name="">Điền Thông Tin Đặt Hàng</button>
        <?php }//đóng ngoặc else?>
      </div>
        
     </div>
     
      <div class="container PhieuDienThongTin">
      <div class="jumbotron">
          <form action="" method="post">
            <div class="row">
              <div class="col-lg-6">
              <?php if(isset($_SESSION['user'])){
                $TaiKhoan =  $_SESSION['user'];
                 require("KetNoiCSDL.php");
                 $SQL = "SELECT * FROM NguoiDung where Gmail = '$TaiKhoan'";
                 $Result = $conn->query($SQL);
                 if ($Result->num_rows > 0) {
                     while($row = $Result->fetch_assoc()) {
      ?>
                  <h1>Điền Thông Tin Mua Hàng</h1>
                  
                <div class="form-group">
                  <label for="">Nhập Họ Tên</label>
                  <input type="text"
                    class="form-control" name="" value ="<?=$row['HoTen']?>" id="HoTen" aria-describedby="helpId" placeholder="Nhập Họ Tên">
                </div>
                <div class="form-group">
                  <label for="">Nhập Số Điện Thoai</label>
                  <input type="text"
                    class="form-control" name="" value = '<?=$row['SDT']?>' id="SDT" aria-describedby="helpId" placeholder="Nhập Số Điện Thoai">
                </div>
                <div class="form-group">
                  <label for="">Nhập Địa Chỉ</label>
                  <input type="text"
                    class="form-control" name="DiaChi" id="" aria-describedby="helpId" placeholder="Nhập Địa Chỉ Chi Tiết">
                </div>
                <?php } } }
                else{
                    ?>
                    <h1>Điền Thông Tin Mua Hàng</h1>
                <div class="form-group">
                  <label for="">Nhập Họ Tên</label>
                  <input type="text"
                    class="form-control" name="" id="HoTen" aria-describedby="helpId" placeholder="Nhập Họ Tên">
                </div>
                <div class="form-group">
                  <label for="">Nhập Số Điện Thoai</label>
                  <input type="text"
                    class="form-control" name=""  id="SDT" aria-describedby="helpId" placeholder="Nhập Số Điện Thoai">
                </div>
                <div class="form-group">
                  <label for="">Nhập Địa Chỉ</label>
                  <input type="text"
                    class="form-control" name="DiaChi" id="" aria-describedby="helpId" placeholder="Nhập Địa Chỉ Chi Tiết">
                </div>
                <?php
                }
                 ?>
                </div>
            <div class="col-lg-6">
              <h1>Vận Chuyển</h1>
                <div class="alert alert-primary" role="alert">
                  <p>Vui lòng nhập thông tin giao hàng</p>
                </div>
                <h1>Thanh Toán</h1>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Thanh toán khi giao hàng (COD)</h4>
                    <p class="card-text">Bạn chỉ phải thanh toán khi nhận được hàng
                    </p>
                  </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-light btn-lg" name='submit_dathang'>Tiến Hành Đặt Hàng</button>
          </form>
      </div>
              <?php 
              if(isset($_REQUEST['submit_dathang'])){
                        echo "<script language='javascript'>alert('Bạn đã đặt hàng thành công');";
                        echo "location.href='index.php';</script>";
                        unset($_SESSION["GioHang"]);
                   }
                  ?>
            
    </div>
   
      <?php
        require("Footer.php"); 
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>