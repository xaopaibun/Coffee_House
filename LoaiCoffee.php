<?php 
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Loại Coffee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>
    <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
    <script src="JAVASCRIPT/main.js"></script>
</head>
  <body>
    <div style="width: 100%; height: 200px;">
        <?php require("Header.php");?>
    </div>
                <?php 
                  include("KetNoiCSDL.php");
                  $idLoai = $_REQUEST["idLoai"];
                  $TenLoai = $_REQUEST["TenLoaiCoffee"];
                  ?>
                  
                      <h2 class="The_h2 text-center"><?=$TenLoai?></h2>;
                  
                
   
    <div class="tabs-content container">
              <div class="content-tab01">
                  <?php 
                  
                    $SQL = "SELECT * FROM SANPHAMCOFFEE WHERE idLoai = $idLoai";
                    $result = $conn->query($SQL);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="content-tab01-item wow animate__zoomInDown" data-wow-duration="1s" data-wow-delay="<?=$index-0.5?>s" data-wow-offset="50"> <!-- Bat Dau Khoi San pham-->
                        <div class="img_sp">
                            <img class= "img_sp" src="AdminQuanTri/IMG/<?=$row["HinhAnh"]?>" alt="">
                        </div>
                        <div class="tieude_sp">
                            <h3 class="name_product"> <a href="ThongTinChiTietSP.php?idCoffee=<?=$row["idCoffee"]?>"><?= $row["TenCoffee"]?></a></h3>
                               <p class="TT_SP">
                               <?= $row["NoiDungMoTa"]?>
                               </p>
                        </div>
                        <div class="gia_sp text-right">
                            <span class="Gia_SP"><?=$row["Gia"]?> VNĐ</span>
                        </div>
                    </div> <!--Het 1 item san pham-->
                    
                    <?php
                    }
                }
                $conn->close();
         ?>
              </div>
          </div>
    <?php require("Footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>