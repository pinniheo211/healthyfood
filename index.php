<?php

require_once 'config/conn.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./responsive/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    html {
  scroll-behavior: smooth;
}
    .member-list img{
        width:320px; 
        height:350px;
        object-fit:cover;

    }
    .up{
        padding:10px 15px;
        border-radius:100%;
        background-color:#28a745;
        position:fixed;
        bottom:10px;
        right:10px;
        z-index: 3;
    }
    .up i{
        color:#fff;
    }
    .menubar{
        box-shadow: 0 -0.5rem 1.5rem #000;
    }

    .list-items img{
        width: 242px;
        height: 260px;
        object-fit: center;
    }

    .list-items{
        background-color:#fff;
    }

    .contact-logo{
        width:100%;
    }
</style>
</head>
<body>
    <div class="wrapper">
        <a class="up" href="#home"><i class="fa-solid fa-arrow-up"></i></a>
        <div class="menubar fixed-top ">
            <div class="logo">
                <a href=""><img src="./img/image-from-rawpixel-id-2046191-original.png" alt="" style="width:160px;"></a>
            </div>

            <div class="menu-list">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About </a></li>
                    <li><a href="quanly.php?page_layout=shopping">Menu</a></li>
                    <li><a href="#footer">Contact</a></li>
                    <?php 
                        session_start();
                            // if($_SESSION['role']==1){
                            //     $_SESSION['role']="quan ly danh sach";
                            // }
                            // if($_SESSION['role']==0){
                            //     $_SESSION['role']="";
                            // }
                            // $_SESSION['role'];
                        ?>
                    <li><a href="quanly.php?page_layout=danhsach"><?php
                    if($_SESSION['role']==1){
                        echo "Management";
                    }
                    else{
                        echo "";

                    }
                    ?>
                </a></li>
                </ul>
            </div>
            <div class="user d-flex flex-column align-items-center ">
                        <?php
                            if(isset($_SESSION['user'])==""){
                                header("location:quanly.php?page_layout=login");
                            }
                            $_SESSION['user'];

                        ?>
                        <h6 class="text-uppercase">Welcome : <?php echo $_SESSION['user']; ?></h6>

                


                
                <a class="btn btn-danger btn-sm" href="quanly.php?page_layout=logout">Logout</a>
            </div>
            <i class="fa-solid fa-bars"></i>
        </div>

        <!-- slider -->
        <div class="slider" id="home">
            <img src="./img/sl1 (1).png" alt="">
            <div class="desc">
                <h1>Build Your Health Eating</h1>
                <a href="#menu">OUR MENU</a>
            </div>
            
        </div>

        <!-- BODY -->
        <div class="body" id="about">
            <!-- body1 -->
            <div class="body1">
                <div class="img" style="z-index:1;">
                    <img src="./shopping_img/6.png" style="width:500px;"  alt="">
                </div>
                <div class="farm">
                    <h1>The best choice for you</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati repudiandae consequatur mollitia minus perspiciatis autem quis. Unde voluptatum harum, minima porro ipsum tempore quibusdam molestias fugiat enim laudantium corrupti doloribus.</p>
                    <div class="feature">
                        <div class="icon">
                            <img src="./img/fea1.png" alt="">
                        </div>
                        <div class="feature-text">
                            <h4>Natural food</h4>
                            <p>Food extracts from natural various fruits. Ensuring food quality and safety</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="icon">
                            <img src="./img/fea2.png" alt="">
                        </div>
                        <div class="feature-text">
                            <h4>No harmful substances</h4>
                            <p> do not add any kind of Artificial Preservatives and/or Preservatives</p>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- body 2 -->
            <!-- <div class="body2">
                <img src="./img/icon2.png" alt="">
                <h3>Our Service</h3>
                <p>Lorem ipsum dolor sit amet consectutur adipisicing elit sed do eiusmotempor incididunt labore dolore magna aliqua minim veniam</p>
                <div class="list-tag-items">
                    <div class="tag-list">
                        <img src="./img/ser2.png" alt="">
                        <h5>Organic Tomato</h5>
                        <p>Lorem ipsum dolor sit ameconecte ur adipisicing elit,sed do eiusmod tempor incididunt labore dolore magnad</p>
                        <a href="">READ MORE</a>
                    </div>
                    <div class="tag-list">
                        <img src="./img/ser2.png" alt="">
                        <h5>Organic Tomato</h5>
                        <p>Lorem ipsum dolor sit ameconecte ur adipisicing elit,sed do eiusmod tempor incididunt labore dolore magnad</p>
                        <a href="">READ MORE</a>
                    </div>
                    <div class="tag-list">
                        <img src="./img/ser2.png" alt="">
                        <h5>Organic Tomato</h5>
                        <p>Lorem ipsum dolor sit ameconecte ur adipisicing elit,sed do eiusmod tempor incididunt labore dolore magnad</p>
                        <a href="">READ MORE</a>
                    </div>
                </div>
                
            </div> -->
            <!-- BODY 3 -->
            <div class="body2 body3" id="menu">
                <img src="./img/pro1.png" alt="" class="img1 imgpos">
                <img src="./img/pro1.png" alt="" class="img2 imgpos">
                <img src="./img/pro1.png" alt="" class="img3 imgpos">
                <img src="./img/pro1.png" alt="" class="img4 imgpos">
                <img src="./img/icon8.png" alt="">
                <h3>Our Products</h3>
                <p>The best option for you to eat</p>

                
                <div class="list-items-info">
                    <div class="list-items">
                        <img src="./shopping_img/zyro-image (1).png" alt="">
                        <h4>tangerine salad</h4>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>    
                        <p>30000VND</p>
                    </div>
                    <div class="list-items">
                        <img src="./shopping_img/zyro-image (2).png" alt="">
                        <h4>vegetable salad</h4>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>    
                        <p>40000VND</p>
                    </div>
                    <div class="list-items">
                        <img src="./shopping_img/zyro-image (3).png" alt="">
                        <h4>tofu salad</h4>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>    
                        <p>45000VND</p>
                    </div>
                    <div class="list-items">
                        <img src="./shopping_img/zyro-image (4).png" alt="">
                        <h4>tropical fruits cereal</h4>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>    
                        <p>55000VND</p>
                    </div>
                </div>
                <a class="btn-view" href="quanly.php?page_layout=shopping">VIEW ALL</a>
                
            </div>
            <!-- body 4 -->
            <div class="body2 body4">
                <img src="./img/icon5.png" alt="">
                <h3>Members of Team</h3>
                <div class="member-list">
                    <ul>
                        <li>
                            <img class="rounded" src="./img/cuong.jpg" alt="">
                            <div class="inf-mem">
                                <h1>Nhom BATL</h1>
                                <p>Trần Chí Cường</p>
                                
                            </div>
                        </li>
                        <li>
                            <img class="rounded" src="./img/khanhnguyen.jpg" alt="">
                            <div class="inf-mem">
                                <h1>Nhom BATL</h1>
                                <p>Nguyễn Bảo Khanh</p>
                                
                            </div>
                        </li>
                        <li>
                            <img class="rounded" src="./img/quan.jpg" alt="">
                            <div class="inf-mem">
                                <h1>Nhom BATL</h1>
                                <p>Võ Duy Minh Quân</p>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- footer -->
            <div class="footer d-flex justify-content-between px-5 flex-wrap" id="footer">
                <div class="contact-logo ">
                    <div class="logo">
                        <img src="./img/image-from-rawpixel-id-2046191-original.png" style="width:160px;" alt="">
                    </div>
                    <div class="social-list">
                        <ul>
                            <li><a href=""><i class="fa-brands fa-facebook  text-secondary"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram text-secondary"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter text-secondary"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-telegram text-secondary"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="info">
                    <div class="about">
                        <h2>About Us</h2>
                        <p>my goal is to provide you with lots of high-quality recipes to help you feel your best</p>
                            <span>Address:</span>
                            <p>16/5 Mai Xuan Thuong Q Binh Thanh</p>
                    </div>
                    <div class="about support">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="">Help and Ordering</a></li>
                            <li><a href="">Return & Cancellation</a></li>
                            <li><a href="">Delevery Schedule</a></li>
                            <li><a href="">Get a Call</a></li>
                            <li><a href="">My Account</a></li>
                        </ul>
                    </div>
                    <div class="about news">
                        <h2>Recent News</h2>
                        <ul>
                            <li>
                                <a href="">Using Visual Composer web Lorem Lorem </a>
                                <p>by Cuong</p>

                            </li>
                            <li>
                                <a href="">Using Visual Composer web Lorem Lorem </a>
                                <p>by Cuong</p>
                            </li>
                        </ul>
                    </div>
                    <div class="about letter">
                        <h2>Newletter</h2>
                        <p>Enter your email</p>

                        <form action="">
                            <input type="text" placeholder="Enter your email">
                            <input type="submit" name="" value="SUBMIT" >
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>