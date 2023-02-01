<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM `monan` WHERE `id` = $id";
    $query = mysqli_query($conn,$sql);

    header('location:quanly.php?page_layout=danhsach');
    

?>