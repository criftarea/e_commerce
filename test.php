<?php

    session_start();

    include_once("function/koneksi.php");
    include_once("function/helper.php");
    $page = isset($_GET['page']) ? $_GET['page'] : false;

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
    $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
    $level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
    $keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();
    $totalBarang = count($keranjang);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MODE</title>
    <link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo BASE_URL."css/banner.css"; ?>" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="image/xologo.png">

    <script src="<?php echo BASE_URL. "js/jquery-3.6.3.min.js" ?>"></script>
    <script src="<?php echo BASE_URL. "js/slidesjs-SlidesJS-3/source/jquery.slides.min.js" ?>"></script>

<script>
        $(function() {
            $('#slides').slidesjs({
                height: 350,
                play: { auto : true,
                        interval : 3000
                      },
                navigation : false
            });
        });
        </script>

    <style>
        .nav-menu {
    background: transparent;
    padding: 30px;
    position: fixed;
    width: 100%;
    z-index: 9999;

    transition: all .4s;
}

@media (max-width:34em) {
    .nav-menu {
        background: #000 !important;
    }
}

.nav-item {
    padding: 0 10px;
}

.menu-item {
    font-family: 'Inria Sans', sans-serif;
    font-size: 11px;
    letter-spacing: 2px;
    color: black;
    text-transform: uppercase;
}
.costum-navbar a {
    color: white;
}

@media (max-width: 34em) {
    .menu-item {
        padding: 10px 10px 10px;
    }
}

.navbar-toggler {
    cursor: pointer;
    outline: 0;

}

.img.logo {
    display:block; 
    margin:auto;
    width: 100px;

}

</style>
</head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="navbar navbar-default navbar-expand-lg nav-menu btn-13">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
        <div id="container">
            
            <div id="header">
                <a href="<?php echo BASE_URL. "index.php"; ?>">
                    <img src="<?php echo BASE_URL."image/.png"; ?>" class="logo"   />                    
                </a>
    
            <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
    
                        <?php 
                            if($user_id){
                                echo "<ul class='navbar-nav ml-auto'>";
    
                                    echo "<li class='nav-item' >
                                            <a class='nav-link m-1 menu-item nav-active active' href='#'><span>Home</span></a>
                                        </li>
                                        <li class='nav-item'>
                                            <a class='nav-link m-1 menu-item' href='#'><span>Products</span></a>
                                        </li>
                                        <li class='nav-item'>
                                            <a class='nav-link m-1 menu-item' href='#'><span>Contact</span></a>
                                        </li>";
                    
                                echo "</ul>";
                              echo "<ul class='navbar-nav ml-auto'>";
                              echo "<li class='nav-item'>
                                      <a class='nav-link m-0 menu-item' href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=list' id='button-keranjang'>
                                      <iconify-icon icon='solar:user-circle-bold' flip='horizontal' style='color: #252525;' width='20' height='20'></iconify-icon>
                                      </a>
                                  </li>";
                          echo "</ul>";
    
                            }else{
                                echo "<ul class='navbar-nav ml-auto'>";
    
                                    echo "<li class='nav-item'>
                                            <a class='nav-link m-1 menu-item nav-active active' href='#'><span>Home</span></a>
                                        </li>
                                        <li class='nav-item'>
                                            <a class='nav-link m-1 menu-item' href='#'><span>Product</span></a>
                                        </li>
                                        <li class='nav-item'>
                                            <a class='nav-link m-1 menu-item' href='#'><span>Contact</span></a>
                                        </li>";
                    
                                echo "</ul>";
    
                                echo "<ul class='navbar-nav ml-auto'>";
                                echo "<li class='nav-item'>
                                        <a class='nav-link m-0 menu-item' href='".BASE_URL."index.php?page=login' id='button-keranjang'>
                                            <iconify-icon icon='heroicons-outline:login' flip='horizontal' style='color: #252525;' width='20' height='20'></iconify-icon>
                                        </a>
                                    </li>";
                          echo "</ul>";
                            }
                        ?>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>" id="button-keranjang" class="nav-link m-0 menu-item">
                                    <iconify-icon icon="solar:cart-4-linear" style="color: #252525;" width="20" height="20"></iconify-icon>
    
                                    <?php
                                        if($totalBarang != 0){
                                            echo "<span class='total-barang'>$totalBarang</span>";
                                        }
                                    ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
            </div>
            <span class="dot" style="left: 149.5px; opacity: 1;"></span>
    </nav>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>