<?php 
    require("KetNoiCSDL.php");
    $ID = $_REQUEST["idLoai"];
    $SQL = "DELETE FROM Loaicoffee WHERE idLoai = $ID";
    if ($conn->query($SQL) === TRUE){
        echo '<div class="alert alert-success">
        <strong>Success!</strong> Xóa Loại Sản Phẩm Thành Công!
      </div>';
    }
    else{
        echo'<div class="alert alert-warning">
        <strong>Success!</strong> Xóa Loại Sản Phẩm Thất Bại!
      </div>';
    }
    $conn->close();
?>