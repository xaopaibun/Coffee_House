<div class="container">
    <div class="header_top">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="welcome_text">Chào mừng bạn đến với Coffee House !</p>
                        </div>
                        
                        <div class="col-lg-6">
                            <?php 
                                if(isset($_SESSION['user'])){
                                    echo '<p id="user" class="text-right"> Xin chào bạn '.$_SESSION['user'].'<a href="DangXuat.php"> Thoát</a>';
                                }
                                else{
                                    echo ' <ul class="ul_taikhoan">
                                    <li class="ul_taikhoan_li"><a href="DangNhap.php">Đăng Nhập</a></li>
                                    <span>/</span>
                                    <li class="ul_taikhoan_li"><a href="DangKy.php">Đăng Ký</a></li>
                                </ul>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="mid-header wow animate__zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="container">
                            <nav class="header_nav">
                                <ul class="header_nav_left">
                                    <li class="nav_item"><a class="active" href="index.php">Trang Chủ</a></li>
                                    <li class="nav_item"><a href="GioiThieu.php">Giới Thiệu</a></li>
                                    <li class="nav_item sp">
                                        <a href="TatCaSanPham.php">Sản Phẩm <i class="fa fa-caret-down"></i></a>
                                        <ul class="nav_item_sanpham text-center">
                                        <?php 
                                            require("KetNoiCSDL.php");
                                            $Sql = "Select * from LoaiCoffee";
                                            $result = $conn->query($Sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                            ?>
                                                    <li><a href="LoaiCoffee.php?idLoai=<?=$row["idLoai"]?>&TenLoaiCoffee=<?=$row["TenLoaiCoffee"]?>"><?=$row["TenLoaiCoffee"]?></a></li>
                    
                                            <?php 
                                                     }
                                                }
                                                    
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="logo_center">
                                    <li><a href=""><img src="IMG/logo.png" alt=""></a></li>
                                </ul>
                                <ul class="header_nav_right">
                                    <li class="nav_item"><a href="">Dịch Vụ</a></li>
                                    <li class="nav_item"><a href="TinTuc.php">Tin Tức</a></li>
                                    <li class="nav_item"><a href="">Liên Hệ</a></li>
                                </ul>
                                    <ul class="GioHang flex text-right">
                                        <li class="nav_icon search"><i class="fas fa-search"></i>
                                            <form action="TimKiem.php" method="post">
                                                <div class="query_search">
                                                    <input name="keyword" type="text" placeholder="Tìm Kiếm"/>
                                                    <button type="submit" name="search"><a href="TimKiem.php"><i class="fas fa-search"></i></a></button>
                                                </div>
                                            </form>
                                        </li>
                                        <li class="nav_icon"><a href="GioHang.php"><i class="fas fa-shopping-cart" style="color:  #e7b45a;"></i><div style="border-radius: 50%; width: 20px; height: 20px; background-color: white;position: absolute; top: 0;right: 0; z-index: 1;text-align: center;font-weight: 900; font-size: 12px;">0</div></a></li>
                                    </ul>
                            </nav>
                        </div>
                    </div>
                </div>
              </div>
     