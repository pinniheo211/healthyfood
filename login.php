<?php
        session_start();
        if(isset($_POST['dangnhap'])){
            $user = $_POST['user'];
            $pass=$_POST['pass'];
            $select = mysqli_query($conn,"SELECT * FROM `tbl_user` WHERE `user`='$user' AND `pass`='$pass'");
            $row = mysqli_fetch_array($select); 

            if(is_array($row)){
                $_SESSION['user'] = $row['user'];
                $_SESSION['pass'] = $row['pass'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['name'] = $row['name'];
            }
            // else if(isset($_SESSION['user']) && $row['role']==1){
            //     header('location:quanly.php?page_layout=danhsach');
            // }else if ( isset($_SESSION['user']) && $row['role']==0){
            //     header('location:quanly.php?page_layout=index');
            else{
                $_SESSION['thongbao'] = "tai khoan hoac mat khau khong dung";
                header("location:quanly.php?page_layout=login");
                die();
                

            }
            
        }

        if(isset($_SESSION['user'])){
            header("location:quanly.php?page_layout=index");
        }
        

        

        //     if(mysqli_num_rows($query_acc)>0){
        //         if($row_acc['role']==1){
        //             header('location:quanly.php?page_layout=danhsach');
        //         }else if($row_acc['role']==0){
        //             header('location:quanly.php?page_layout=index');
        //         }
        //     }else{
        //         echo "<script>alert('ban nhap sai tai khoan hoac mat khau')</script>";
        //     }
        //     // if($conn){

        //     //     if ($row_acc['role']==1){
        //     //         header('location:quanly.php?page_layout=index');
                    


        //     // }else if($row_acc['role']==0){
        //     //     header('location:quanly.php?page_layout=danhsach');
        //     //     }
        //     //     echo "<script>alert(' dang nhap thanh cong')</script>";
        //     // }else{
        //     //     echo "tai khoan hoac mat khau khong dung";
        //     // }
        // }
        if(isset($_POST['dangky'])){
            header("Location:quanly.php?page_layout=dangky");
        }
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-admin</title>
    <style>
        body{
            background-image:url('./img/bg10.jpeg');
        }
        .form-log{
            background-color: white;
        }
    </style>
        
</head>
<body>
    <div class="container d-flex justify-content-center pt-5">
        <div  class="form-log p-5 " style="width:400px; border-radius: 50px 50px">
            <h2 class="text-center">Login </h2>
            <?php 
                if(isset($_SESSION['thongbao'])){

                    echo $_SESSION['thongbao']; 
                }
            ?>
            <div class="form-login ">
                
                <form action="" method="POST">
                    <label class="form-label mb-3" for="user">Tên đăng nhập</label>
                    <input class="form-control mb-3" type="text" name="user" id="">
                    <label class="form-label mb-3" for="pass">Mật khẩu</label>
                    <input class="form-control mb-3" type="password" name ="pass">
                    <div class="form text-center d-flex justify-content-center">

                        <input class="mr-4 btn btn-outline-info" type="submit" name="dangnhap" value="Đăng nhập">
                        <input class="btn btn-outline-info" type="submit" name="dangky" value="Đăng ký">
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>