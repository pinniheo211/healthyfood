<?php 
    session_start();
    if(isset($_SESSION['user'])){
        session_destroy();
    }
    header("location:quanly.php?page_layout=login")

?>