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
    <STYle>

    </STYle>
</head>
<body>

    
 
    <?php
        $id_up = $_GET['id'];
        $sql_up ="SELECT * FROM `monan` where `id` = $id_up";
        $query_up = mysqli_query($conn,$sql_up);
        $row_up = mysqli_fetch_assoc($query_up);
        if(isset($_POST['add'])){
            $id = $_POST["id"];
            $tenmonan =$_POST["tenmonan"];
            $mota = $_POST["mota"];
            $tien = $_POST["tien"];
            if($FILES['hinhanh']['name']==''){
                $hinhanh = $row_up['hinhanh'];
            }else{

                $hinhanh = $_FILES['hinhanh']['name'];
                $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
                move_uploaded_file($hinhanh_tmp,'shopping_img/.$hinhanh');
            }
            $hinhanh =$_POST['hinhanh'];

            // $sql = "UPDATE  `monan` SET `id` = $id , `tenmonan` = $tenmonan, `mota` = $mota, `tien` = $tien, `hinhanh` = $hinhanh";
            // $query = mysqli_query($conn,$sql);
            // header('location:quanly.php?page_layout=danhsach');
             
            if($conn -> query("UPDATE `monan` SET `tenmonan` = '$tenmonan', `mota` = '$mota' , `tien` = '$tien' , `hinhanh` = '$hinhanh' WHERE `monan`.`id` = '$id_up'" )){
                echo "<script>alert('Thêm thành công !')</script>";
                header('location:quanly.php?page_layout=danhsach');


            }else{
                echo "<script>alert('Sửa thất bại !')</script>";
            }
        }
        
    
    ?>

    <div class="container">
        <h2 class ="card-header text-center mb-5">SỬA MÓN ĂN</h2>

        <form method="POST" action="">
            <!-- <div class="form-group">
                <label for="id">id</label>
                <input type="text" name="id" class="form-control" placeholder="nhap id" required value="<?php echo $row_up['id'];?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div> -->
            <div class="form-group">
                <label for="tenmonan">Tên món ăn</label>
                <input name="tenmonan" class="form-control" placeholder="nhap ten san pham" required value="<?php echo $row_up['tenmonan'];?>">
            </div>
            <div class="form-group">
                <label for="mota">Chi tiết sản phẩm</label>
                <input name="mota" class="form-control" placeholder="chi tiet san pham"required value="<?php echo $row_up['mota'];?>">
            </div>
            <div class="form-group">
                <label for="tien">Số tiền</label>
                <input name="tien" class="form-control" placeholder="so tien"required value="<?php echo $row_up['tien'];?>">
            </div>
            <div class="form-group">
                <label for="hinhanh">Hình ảnh</label>
                <input type="file" name="hinhanh" class="form-control" required >
            </div>
            <div class="text-center"><button  type="submit" class="btn btn-warning mt-5 px-5" name="add">Sửa</button></div>
            
        </form>
    </div>
</body>
</html>