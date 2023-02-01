<?php

require_once 'config/conn.php'?>


<?php
    $sql = "select *from monan";
    $query = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']){
                case 'danhsach':
                    session_start();
                    if($_SESSION['role']==1){
                        require_once 'danhsach.php';
                    }else{
                        require_once 'error.php';
                    }
                    break;

                case 'them':
                    session_start();
                    if($_SESSION['role']==1){
                        require_once 'them.php';
                    }else{
                        require_once 'error.php';

                    }
                    break;

                case 'sua':
                    session_start();
                    if($_SESSION['role']==1){
                        require_once 'sua.php';
                    }else{
                        require_once 'error.php';

                    }
                    break;

                case 'xoa':
                    require_once 'xoa.php';
                    break;
                case 'shopping':
                    require_once 'shopping.php';
                    break;
                case 'index':
 
                        require_once 'index.php';
                        break;
                case 'login':
                    require_once 'login.php';
                    break;
                case 'dangky';
                    require_once 'dangky.php';
                    break;
                case 'logout':
                    require_once 'logout.php';
                    break;
                default:
                    require_once 'login.php';
                    break;
            }
            
        }
        else{
            require_once 'quanly.php';
        }

    ?>
    
</body>
</html>


