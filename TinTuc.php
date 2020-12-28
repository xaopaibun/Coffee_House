<?php 
   session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Tin Tức</title>
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
     <div class ="tintuc"> 
            <div class="container">
                <h1 class="text-center">Tin Tức</h1>
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
                                <img src="AdminQuanTri/IMG/<?=$row['HinhAnhTinTuc']?>" width="255px" height="255px"  alt="">
                            </div>
                            <div class="col-xl-6">
                                <p><i class ="fas fa-calendar-alt"></i>  <?=$row['NgayDangTin']?></p>
                                <h3><a href="ChiTietTinTuc.php?iDTinTuc=<?=$row['iDTinTuc']?>"><?=$row['TieuDe']?></a></h3>
                                <div class="content"><?=$row['NoiDung']?></div>
                            </div>
                        </div>
                    </div>
                    <?php 

                            }
                        }
                    ?>
                    
                    
                    
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