<?php 
    require("KetNoiCSDL.php");
    $ID = $_REQUEST["idCoffee"];
    $SQL = "DELETE FROM sanphamcoffee WHERE idCoffee = $ID";
    if ($conn->query($SQL) === TRUE){
        echo '<div class="alert alert-success">
        <strong>Success!</strong> Xóa Sản Phẩm Thành Công!
      </div>';
    }
    else{
        echo'<div class="alert alert-warning">
        <strong>Success!</strong> Xóa Sản Phẩm Thất Bại!
      </div>';
    }
    $conn->close();
?>