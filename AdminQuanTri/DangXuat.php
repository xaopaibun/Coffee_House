<?php 
    session_start();
    if(isset($_SESSION["quantrivien"])){
        unset($_SESSION["quantrivien"]);
        header("location:login.php");
    }
?>
