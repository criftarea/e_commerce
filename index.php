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
    <title>ourmotif <3</title>
    <link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo BASE_URL."css/banner.css"; ?>" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="image/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

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
</head>
<br><br>
<body>
<div id="menu">
        <div id="logo">
            <a href="<?php echo BASE_URL. "index.php"; ?>">
                <img src="<?php echo BASE_URL."image/logo.png"; ?>"
                height="50" width="55">
            </a>
        </div>

        <center> <!-- INI KATEGORI YANG DITARUH DI TENGAH NAVBAR -->
        <div id="kategori">
            <span>
            <?php
                $kategori_id=@$_GET['kategori_id'];
                echo kategori($kategori_id);
            ?>
            <span>
        </div>
        </center>

                <div id="user">
                        <?php 
                            if($user_id){
                                echo "
                                <a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=list'>
                                <img src='".BASE_URL."image/user.png' height='35' width='35'</a>
                                <a href='".BASE_URL."logout.php'>
                                <img src='".BASE_URL."image/keluar.png' height='35' width='35'</a>";
                            }else{
                                echo "<a href='".BASE_URL."index.php?page=login'>
                                <img src='".BASE_URL."image/user.png' height='35' width='35'/></a>";
                            }
                        ?>
                    

                    <a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>" id="button-keranjang">
                        <img src="<?php echo BASE_URL."image/cart1.png"; ?>" 
                        height="35" width="35" text-align="right">
                    </a>

                        <?php
                            if($totalBarang !=0){
                                echo "<class = 'total-barang'>$totalBarang</class> ";
                            }
                            ?>
                </div>
            </div>

    <div id="container">
                        <?php
                            if($user_id){
                                echo "<center><p style='font-size:20px'>‧₊˚✩ hello ! <b>$nama</b> ₊˚⊹ ♡ </p></center>";
                            }
                        ?>
        <center>
        <div id="container">
            <?php 
                $filename = "$page.php";

                if(file_exists($filename)){
                    include_once($filename);
                }else{
                    include_once("main.php");
                }
            ?>
        </div>
            </center>
    </div>

</body>
</html>