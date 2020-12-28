<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Thông tin Coffee House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <!-- <script src="JAVASCRIPT/main.js"></script> -->
  </head>
  <body>
    <div class="headertop">
        <?php 
            require("Header.php");
           
        ?>
    </div>
    <div class="container">
            
        <div class="row">
            <?php 
                require("KetNoiCSDL.php");
                $id = $_REQUEST["idCoffee"];
                $SQL = "SELECT idCoffee, TenCoffee, NoiDungMoTa, HinhAnh,  Gia,ThuongHieu, ThongTin  FROM SANPHAMCOFFEE, LoaiCoffee WHERE idCoffee = $id";
                $result = $conn->query($SQL);
                $row = $result->fetch_array();
                ?>
                <div class="col-xl-6">
                <img src="AdminQuanTri/IMG/<?=$row["HinhAnh"]?> " width="100%" height="100%" alt="">
            </div>
            <div class="col-xl-6">
                <div class="title">
                    <h2 style="color: #252525;
                    font-size: 28px;
                    line-height: normal;
                    margin: 0px;
                    margin-top: 0px;
                    margin-bottom: 8px;
                    font-weight: 600;"> <?=$row["TenCoffee"]?> </h2>
                    <p style="font-size: 28px;
                    line-height: 28px;
                    display: inline-block;
                    color: #e7b45a;
                    font-weight: 900;"><?=$row["Gia"]?> VNĐ </p>
                </div>
                <div class="status">
                    <p>Thương Hiệu: <?=$row["ThuongHieu"]?> </p>
                </div>
                <form action="GioHang.php?action=add" method="POST">
                    <div class="block_chonsp">
                            <div class="left">
                                    <button type="button" class="btn btn-default botron" id="giam" onclick="Tru()">-</button>
                                    <input type="text"
                                        class="form-control botron" name="DatHang[<?=$id?>]" value="1" id="soluong" aria-describedby="helpId" placeholder="">
                                    <button type="button" class="btn btn-default botron" id="tang" onclick="Cong()">+</button>
                            </div>
                            <div class="right">
                                <input type="submit"
                                    class="form-control btndathang" name="" id="" aria-describedby="helpId" placeholder="" value="Đặt Hàng">     
                            </div>
                    </div>
            </form>
                <div class="thongtinsp">
                    <b>Thông tin:</b>
                    <p><?=$row["ThongTin"]?> </p>
                </div>
            </div>
            <div class="MoTaChiTietSanPham">
                <h2 style="border-bottom: solid 1px #ebebeb;padding-bottom: 15px;">Mô tả sản phẩm | Đánh Gía </h2>
                <p style="color: #707070;font-style: 14px;"><?=$row["NoiDungMoTa"]?> </p>
            </div> <? ?>
            
        </div>
    </div>
    <?php require("Footer.php"); ?>
    <script>
        function Cong(){
            console.log("click");
            var count = document.getElementById("soluong").value;
            document.getElementById("soluong").value = count++;
        }
        function Tru(){
            var count = document.getElementById("soluong").value;
            if(count == 1){
                document.getElementById("soluong").value = count;
            }
            else{
                document.getElementById("soluong").value = count--;
            }
    }

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
