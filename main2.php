
    
<div id="kanan">
    <div id="slides">
        <?php
        $queryBanner = mysqli_query($koneksi, "SELECT * FROM banner WHERE status='on' ORDER BY banner_id DESC LIMIT 3");
        while($rowBanner=mysqli_fetch_assoc($queryBanner)){
            echo "<a href='".BASE_URL."$rowBanner[link]'><img src='".BASE_URL."image/slide/$rowBanner[gambar]' /></a>";
        }
        ?>
    </div>

<div id="kanan">
    <div id="frame-barang">
        <ul>
           <?php
            if ($kategori_id) {
                $query  = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='on' AND kategori_id='$kategori_id' ORDER BY rand() DESC LIMIT 9");
            } else {
               $query   = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='on' ORDER BY rand() DESC LIMIT 9");
            }
            $no=1;
            while($row=mysqli_fetch_assoc($query)){
                $style=false;
                if($no  == 3){
                    $style="style='margin-right:0px'";
                    $no=0;
                }
                
                echo "<li $style>
                
                <a href='".BASE_URL."index.php?page=detail&barang_id=$row[barang_id]'>
                    <img src='".BASE_URL."image/barang/$row[gambar]' />
                </a>
                <div class='keterangan-gambar'>
                    <p><a href='".BASE_URL."index.php?page=detail&barang_id=$row[barang_id]'>$row[nama_barang]</a></p>
                    <p class='price'>".rupiah($row['harga'])."</p>
                </div>
                ";

            $no++;
            }
            ?>
        </ul>
        </div>
    </div>

    <footer class="footer">
                <div class="footer-left">
        
                    <div class="credit-cards">
                        <img src="image/visa.png" alt="">
                        <img src="image/mastercard.png" alt="">
                        <img src="image/paypal.png" alt="">
                    </div>
                    <p class="footer-copyright">Copyright © 2023 Ourmotif</p>
                </div>

                <div class="footer-center">
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>Indonesia</span> Banjarbaru, South Borneo</p>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+62 077-777-77</p>
                    </div>
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="#">Ourmotif@gmail.com</a></p>
                    </div>
                </div>

                <div class="footer-right">
                    <p class="footer-about">
                        <span>About</span>
                        Support us biar semangat hehehe :)
                    </p>

                    <div class="footer-media">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        
                    </div>
                </div>

            </footer>