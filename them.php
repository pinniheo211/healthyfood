<?php 
                        // session_start();
                        if(isset($_SESSION['user'])==""){
                            header('location:quanly.php?page_layout=login');
                        }
                        $_SESSION['user'];
                    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Thêm món ăn</title>
    
</head>
<body>

    
 
    <?php
        if(isset($_POST['add'])){
            $tenmonan =$_POST["tenmonan"];
            $mota = $_POST["mota"];
            $tien = $_POST["tien"];
            $hinhanh = $_POST["hinhanh"];
            
            if($conn -> query("INSERT INTO `monan`( `tenmonan`, `mota`, `tien`, `hinhanh`) VALUES ('$tenmonan','$mota','$tien','$hinhanh')" )){
                echo "<script>alert('Thêm thành công !')</script>";
                header('location:quanly.php?page_layout=danhsach');


            }else{
                echo "<script>alert('Thêm thất bại !')</script>";
            }
        }
        
    
    ?>

    <div class="container">
        <div class="card-header text-center mb-5">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <form  method="POST" action="">
            <div class="form-group">
                <label for="tenmonan">Tên món ăn</label>
                <input name="tenmonan" class="form-control" placeholder="Nhập tên sản phẩm" required>
            </div>
            <div class="form-group">
                <label for="mota">Chi tiết sản phẩm</label>
                <input name="mota" class="form-control" placeholder="Chi tiết sản phẩm"required>
            </div>
            <div class="form-group">
                <label for="tien">Số tiền</label>
                <input name="tien" class="form-control" placeholder="Số tiền"required>
            </div>
            <div class="form-group">
                <label for="hinhanh">Hình ảnh</label>
                <input type="file" name="hinhanh" class="form-control"required>
            </div>
            <div class="container d-flex justify-content-center button">
                <button  type="submit" class="btn btn-warning mt-5 px-5 py-2  " name="add">Thêm</button>

            </div>
        </form>
    </div>
</body>
</html>