<!doctype html>
<html lang="en">
  <head>
    <title> Đăng Ký Tài Khoản</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
  </head>
  <body>
  <div class="headertop">
        <?php 
            require("Header.php");
        ?>
    </div>
      <div class="content text-center">
                  <?php 
                    require("KetNoiCSDL.php");
                    if(isset($_REQUEST["btnDangKy"])){
                      $HoTen = $_REQUEST["txtHoTen"];
                      $Email = $_REQUEST["txtEmail"];
                      $SDT = $_REQUEST["txtSDT"];
                      $MatKhau = $_REQUEST["txtMatKhau"];
                      $MatKhau = md5($MatKhau);
                      $SQL = "INSERT INTO NguoiDung VALUES('$Email','$MatKhau', '$HoTen','$SDT')";
                      if($conn->query($SQL) === true){
                        echo'
                          <div class="alert alert-success">
                            <strong>Success!</strong> Đăng Ký Tài Khoản Thành Công!. Mời Bạn Đăng Nhập
                          </div>';
                      }
                      else {
                        echo '<div class="alert alert-danger">
                        <strong>Danger!</strong>Đăng Ký Thất Bại</a>
                      </div>';
                      }
                    }
                ?>
          <h1 >ĐĂNG KÝ TÀI KHOẢN</h1>
          <p>Đăng ký ngay tài khoản để nhận được những ưu đãi hấp dẫn khi mua hàng</p>
      </div>
    <div class="container">
         <div class="row">
             <div class="col-lg-6 cangiua">
                <form action="DangKy.php" method="post">
                    <div class="form-group">
                      <input type="text"
                        class="form-control input" name="txtHoTen" id=""  placeholder="Nhập Họ Tên">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input" name="txtEmail" id="" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                      <input type="text"
                        class="form-control input" name="txtSDT" id=""  placeholder="Nhập Số Điện Thoại">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control input" name="txtMatKhau" id="" placeholder="Nhập Mật Khẩu">
                    </div>
                   
                    <input name="btnDangKy" id="btnDangKy" class="btn btn-outline-success submit" type="submit" value="Đăng Ký">
                </form>
               
                <p class="text-center">Hoặc đăng nhập bằng</p>
             </div>
         </div>     
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