<?php 
    require("KetNoiCSDL.php");
    $ID = $_REQUEST["iDTinTuc"];
    $SQL = "DELETE FROM TinTuc WHERE iDTinTuc = $ID";
    if ($conn->query($SQL) === TRUE){
        echo '<div class="alert alert-success">
        <strong>Success!</strong> Xóa Tin Tức Thành Công!
      </div>';
    }
    else{
        echo'<div class="alert alert-warning">
        <strong>Success!</strong> Xóa Tin Tức Thất Bại!
      </div>';
    }
    $conn->close();
?>