<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Đăng Nhập</title>
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
          <h1 >ĐĂNG NHẬP TÀI KHOẢN</h1>
          <p>Bạn đã có tài khoản, vui lòng đăng nhập tại đây!</p>
      </div>	
    <?php
       //ob_start(); 
        require("KetNoiCSDL.php");
        if(isset($_REQUEST["submit"])){
            $TK = $_REQUEST["email"];
            $MK = $_REQUEST["password"];
            $MK = md5($MK);
            $SQL = "SELECT * FROM NguoiDung WHERE Gmail = '$TK' AND MatKhau = '$MK'";
            $result = $conn->query($SQL);
            if($result->num_rows === 1){
                $_SESSION["user"] = $TK;
                // echo $_SESSION['user'];
                // header("Location:index.php");
                echo "<script language='javascript'>alert('Bạn đã đăng nhập thành công');";
        echo "location.href='index.php';</script>";
            }
            else{
              // $_SESSION["user"] = '';
                echo"<div class='alert alert-danger'>
                <strong>Danger! </strong> Đăng Nhập Thất Bại Do Sai Tài Khoản or Mật Khẩu</a>
              </div>";
            }
        }
        //ob_end_flush();
    ?>
    <div class="container">
         <div class="row">
             <div class="col-lg-6 cangiua">
                <form action="DangNhap.php" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control input" name="email" id="" aria-describedby="emailHelpId" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control input" name="password" id="" placeholder="Nhập Mật Khẩu">
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                        Ghi Nhớ Đăng Nhập
                      </label>
                    </div>
                    <input name="submit" id="" class="btn btn-success submit" type="submit" value="Đăng Nhập">
                </form>
                <p class="text-center">Bạn Chưa Có Tài Khoản thì đăng ký <a href="DangKy.php">tại đây</a></p>
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