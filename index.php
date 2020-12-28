<?php 
   session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Coffee House</title>
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
    <div class="header" style="background-image:<?php echo "url('./IMG/slider_1.jpg');"; ?>">
        <?php require("Header.php");?>
    </div>
      <div class="section_about">
          <div class="container">
              <div class="row">
                  <div class="col-xl-5">
                      <div class="about_left text-justify">
                          <div class="heading a-center">
                              <h2 class="The_h2 wow animate__bounceInDown" data-wow-duration="0.5s" data-wow-delay="1s">CHÚNG TÔI LÀ</h2>
                              <span class="Coffee_House wow animate__bounceInDown" data-wow-duration="0.5s" data-wow-delay="1.5s">Coffee house</span>
                          </div>
                          <div class="day_time wow animate__bounceInDown" data-wow-duration="0.5s" data-wow-delay="2.3s">Thứ hai đến Thứ bảy <b>8:30am - 11:00pm</b> | Hotline: <b>18006750</b></div>
                          <span class="wow animate__bounceInDown" data-wow-duration="0.5s" data-wow-delay="3s">Chúng tôi đi khắp thế giới để tìm kiếm cà phê tuyệt vời. Trong quá trình đó, chúng tôi phát hiện ra những hạt đậu đặc biệt và hiếm đến nỗi chúng tôi có thể chờ đợi để mang chúng về.</span>
                      </div>
                  </div>
                  <div class="col-xl-7">
                    <div class="about_right wow animate__zoomIn" data-wow-duration="2s" data-wow-delay="2s">
                        <img class= "img_about" src="IMG/bg_about.png" alt="">
                    </div>
                </div>
              </div>
          </div>
      </div>
      <section class="section_menu_today">
          <div class="container">
            <div class="heading">
                <h2 class="The_h2">MENU HÔM NAY </h2>
                <p class="text-center">Xem Menu hôm nay</p>
              </div>
              
          <div class="tabs-content container">
              <div class="content-tab01">
                  <?php 
                    // $index = 1;
                    $SQL = "SELECT * FROM SANPHAMCOFFEE LIMIT 6";
                    $result = $conn->query($SQL);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        // if($index > 6){
                        //     break;
                        // }
                    ?>
                    <div class="content-tab01-item wow animate__zoomInDown" data-wow-duration="1s" data-wow-delay="<?=$index-0.5?>s" data-wow-offset="50"> <!-- Bat Dau Khoi San pham-->
                        <div class="img_sp">
                            <img class= "img_sp" src="AdminQuanTri/IMG/<?=$row["HinhAnh"]?>" alt="">
                        </div>
                        <div class="tieude_sp">
                            <h3 class="name_product"><a href="ThongTinChiTietSP.php?idCoffee=<?=$row["idCoffee"]?>"><?= $row["TenCoffee"]?></a></h3>
                               <p class="TT_SP" style="overflow: hidden;">
                               <?= $row["NoiDungMoTa"]?>
                               </p>
                        </div>
                        <div class="gia_sp text-right">
                            <span class="Gia_SP"><?=$row["Gia"]?> VNĐ</span>
                        </div>
                    </div> <!--Het 1 item san pham number_format($row["Gia"], 3)-->
                    
                    <?php
                        //$index++;
                    }
                }
                $conn->close();
         ?>
              </div>
          </div>
          <div class="Nut_xem_them">
              <div class="row">
                <div class="col-lg-12  a-center">
                <a href="TatCaSanPham.php" class="Xem_Them">Xem Thêm <i class="fas fa-caret-right"></i></a>
                </div>
              </div>
          </div>
      </section>
      <div class="Hinh_Anh_Quan_Coffee">
          <div class="container">
              <h2 class="The_h2  wow animate__bounceInDown" data-wow-duration="1s" data-wow-delay="2s" data-wow-offset="50">HÌNH ẢNH QUÁN CAFE</h2>
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="khoi_imgtrai wow animate__rollIn" data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="50">
                        <img src="./IMG/gallery_big.jpg" alt="" class="img-responsive img_img_big">
                    </div>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-6 flex">
                   <div class="khoi_img wow animate__zoomInDown" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="50">
                       <img src="./IMG/gallery_1.jpg" alt="" class="img_img">
                   </div>
                   <div class="khoi_img wow animate__bounceInDown" data-wow-duration="1s" data-wow-delay="2s" data-wow-offset="50">
                    <img src="./IMG/gallery_2.jpg" alt="" class="img_img">
                    </div>
                    <div class="khoi_img wow  animate__rotateIn" data-wow-duration="1s" data-wow-delay="2.5s" data-wow-offset="50">
                        <img src="./IMG/gallery_3.jpg" alt="" class="img_img">
                    </div>
                    <div class="khoi_img wow animate__zoomIn" data-wow-duration="1s" data-wow-delay="3s" data-wow-offset="50">
                     <img src="./IMG/gallery_4.jpg" alt="" class="img_img">
                     </div>
                </div>
            </div>
          </div>
      </div>
      <div class="section_hours_book form_contact_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 content_left wow animate__bounceInDown" data-wow-duration="1s" data-wow-delay="2s" data-wow-offset="50">
                        <div class="heading a-center">
                            <h2>Giờ mở cửa</h2>
                        </div>
                        <div class="content_hour">
                            <p class="option_1">Thứ 2 - Thứ 6 hàng tuần</p>
                            <span>7am - 11am</span>
                            <span>11am - 10pm</span>
                            <p class="option_2">Thứ 7, Chủ nhật hàng tuần</p>
                            <span>8am - 1 am</span>
                            <span>11am - 9pm</span>
                        </div>
                        <div class="hotline_hour">
                            <div class="sdt">Số điện thoại</div>
                            
                            <a href="tel:18006750">18006750</a>
                            
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 to_animate text-center  wow animate__bounceInDown "data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="80">
                        <div class="heading a-center">
                            <h2>Bạn có muốn đặt bàn ?</h2>
                            <span class="padding-top-10">Gọi ngay cho chúng tôi để đặt bàn</span>
                        </div>
                        <div class="form-wrapper columns_margin_bottom_20  columns_padding_15">
                            <form action="#" method="post">
                               
                                <div id="emtry_contact" class="form-signup form_contact clearfix">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 form-builder-item">
                                            <fieldset class="form-group">
                                                <input class="form-control" type="text" name="txtHoTen" id="name" placeholder="Tên của bạn" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 form-builder-item">
                                            <fieldset class="form-group">
                                                <input class="form-control" onkeypress="preventNonNumericalInput(event)" autocomplete="off" type="text" name="txtSDT" placeholder="Số điện thoại" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 form-builder-item">
                                            <div class="form-group line-item-property__fields">
                                                <div class="field-date input-groups">
                                                    <input class="tourmaster-datepicker form-control" value="" autocomplete="off" id="datesss" name="txtNgayDat" type="date"  placeholder="Ngày" data-date-format="dd MM yyyy"  required/>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 form-builder-item hour_check">
                                            
                                            <fieldset class="form-group">
                                                
                                                <input placeholder="Giờ" type="text" autocomplete="off" class="form-control" value="" name="txtGio" required>
                                                <span class="input-group-addons"><i class="fas fa-calendar-alt"></i></span>
                                                <select name="Gio" id="guiest_id1" class="select-drop">							
                                                    <option selected="">Giờ</option>
                                                    <option value="0 AM">0 AM</option>
                                                    <option value="1.00 AM">1.00 AM</option>
                                                    <option value="2.00 AM">2.00 AM</option>
                                                    <option value="3.00 AM">3.00 AM</option>
                                                    <option value="4.00 AM">4.00 AM</option>
                                                    <option value="5.00 AM">5.00 AM</option>
                                                    <option value="6.00 AM">6.00 AM</option>
                                                    <option value="7.00 AM">7.00 AM</option>
                                                    <option value="8.00 AM">8.00 AM</option>
                                                    <option value="9.00 AM">9.00 AM</option>
                                                    <option value="10.00 AM">10.00 AM</option>
                                                    <option value="11.00 AM">11.00 AM</option>
                                                    <option value="1.00 PM">1.00 PM</option>
                                                    <option value="2.00 PM">2.00 PM</option>
                                                    <option value="3.00 PM">3.00 PM</option>
                                                    <option value="4.00 PM">4.00 PM</option>
                                                    <option value="5.00 PM">5.00 PM</option>
                                                    <option value="6.00 PM">6.00 PM</option>
                                                    <option value="7.00 PM">7.00 PM</option>
                                                    <option value="8.00 PM">8.00 PM</option>
                                                    <option value="9.00 PM">9.00 PM</option>
                                                    <option value="10.00 PM">10.00 PM</option>
                                                   
                                                    
                                                </select>
                                            </fieldset>
                                        </div>
                                        <!-- <input type="hidden" id="email1" class="form-control form-control-lg hidden" value="emailmacdinh@gmail.com" name="contact[email]">
                                        <input type="hidden" name="contact[body]" value="hidden@noidung" id="comment" class="hidden form-control form-control-lg val_content"> -->

                                    </div>
                                    <div class="wrap-forms wrap-forms-buttons margin-top-25 f-left w_100">
                                        <div class="row">
                                            <div class="col-sm-12 wrap-buttons text-center">
                                                <button class="theme_button wide_button color1 btn btn-primary  btnsubmit" type="submit">Gửi ngay cho chúng tôi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                <?php
                                if(isset($_REQUEST['btnsubmit'])){
                                    echo "đã clicl";
                                    require("KetNoiCSDL.php");
                                    $name = $_POST["txtHoTen"];
                                    $sdt = $_REQUEST["txtSDT"];
                                    $gio = $_POST["Gio"];
                                    $ngay = $_POST["ngay"];
                                   
                                    $SQL = "INSERT INTO datban VALUES ('$name', NULL, '$sdt', '$ngay', '$gio')";
                                    if( $conn->query($SQL) === TRUE){
                                        echo"Thành công";
                                       // echo "<script language='javascript'>alert('Bạn đã đặt bàn thành công');</script>";
                                        
                                    }
                                    else{
                                        echo"Thẩ Bạ";
                                        //echo "<script language='javascript'>alert('Bạn đã đặt bàn thất bại');</script>";
                                        
                                    }
                                }
                                   
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>	
		$('.hour_check select').change(function() {
			$('.hour_check input').attr('value', $(this).find('option:selected').val());
		});
    </script>
    <div class ="tintuc"> 
            <div class="container">
                <h1 class="text-center">Tin Tức</h1>
                <div class="row">
                            <?php
                                require("KetNoiCSDL.php");
                                $SQL = "SELECT * FROM tintuc LIMIT 2";
                                $result = $conn->query($SQL);
                                if ($result->num_rows > 0) {
                                    
                                    while($row = $result->fetch_assoc()) {
                            ?>
                    <div class="col-xl-6 KhoiTinTuc">
                        <div class="row">
                            <div class="col-xl-6">
                                <img src="IMG/<?=$row['HinhAnhTinTuc']?>" width="255px" height="255px"  alt="">
                            </div>
                            <div class="col-xl-6">
                                <p style="color: #707070;"><i class ="fas fa-calendar-alt" style="color: #e7b45a;"></i>  <?=$row['NgayDangTin']?></p>
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