<div id="kanan">
    <div id="slides">
        <?php
        $queryBanner = mysqli_query($koneksi, "SELECT * FROM banner WHERE status='on' ORDER BY banner_id DESC LIMIT 3");
        while($rowBanner=mysqli_fetch_assoc($queryBanner)){
            echo "<a href='".BASE_URL."$rowBanner[link]'><img src='".BASE_URL."image/slide/$rowBanner[gambar]' /></a>";
        }
        ?>
        <section>
    </div>

    <div id="textnya">
      <h1>OUR PRODUCT</h1>
    </div>
    </section>

<center style="padding-left: 20px;">
  <div id="kanan">
    <div id="frame-barang">
        <ul class="produk-kolom">
           <?php
            if ($kategori_id) {
                $query  = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='on' AND kategori_id='$kategori_id' ORDER BY rand() DESC LIMIT 30");
            } else {
               $query   = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='on' ORDER BY rand() DESC LIMIT 30");
            }
            $no=1;
            while($row=mysqli_fetch_assoc($query)){
                $style=false;
                if($no  == 3){
                    $style="style='margin-right:0px'";
                    $no=0;
                }
                
                echo "<li $style>
                <div class='hover01'>
                <a href='".BASE_URL."index.php?page=detail&barang_id=$row[barang_id]'>
                <figure><img src='".BASE_URL."image/barang/$row[gambar]' />
                
                </div></a></figure>
                
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

    <html lang="en"><head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">

    <link rel="canonical" href="https://codepen.io/studiojvla/pen/qVbQqW">
  
  
  
<style>
@-webkit-keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-250px * 7));
  }
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-250px * 7));
  }
}
.slider {
  background: white;
  font-family: 'Nunito', Arial;
  height: 100px;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 960px;
}
.slider::before, .slider::after {
    font-family: 'Nunito', Arial;
  background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
  content: "";
  height: 100px;
  position: absolute;
  width: 200px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  -webkit-animation: scroll 40s linear infinite;
          animation: scroll 40s linear infinite;
  display: flex;
  width: calc(250px * 14);
}
.slider .slide {
    font-family: 'Nunito', Arial;
  height: 100px;
  width: 250px;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>
  
</head>
</div>
<div id="textnya">
    <h1>BEST SELLER</h1>
    </div>
<body translate="no">
  <div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img src="image/best/1gmb.png" height="100" alt="">
		</div>
		<div class="slide">
			<img src="image/best/2gmb.png" height="100"  alt="">
		</div>
		<div class="slide">
			<img src="image/best/3gmb.png" height="100"  alt="">
		</div>
		<div class="slide">
			<img src="image/best/4gmb.png" height="100"  alt="">
		</div>
		<div class="slide">
			<img src="image/best/5gmb.png" height="100"  alt="">
		</div>
		<div class="slide">
			<img src="image/best/6gmb.png" height="100" alt="">
		</div>
		<div class="slide">
			<img src="image/best/7gmb.png" height="100"  alt="">
		</div>
		<div class="slide">
			<img src="image/best/8gmb.png" height="100"  alt="">
		</div>
		<div class="slide">
			<img src="image/best/9gmb.png" height="100" alt="">
		</div>
		<div class="slide">
			<img src="image/best/10gmb.png" height="100"  alt="">
		</div>
		<div class="slide">
			<img src="image/best/11gmb.png" height="100" alt="">
		</div>
		<div class="slide">
			<img src="image/best/12gmb.png" height="100"  alt="">
		</div>
		<div class="slide">
			<img src="image/best/13gmb.png" height="100" alt="">
		</div>
		<div class="slide">
			<img src="image/best/14gmb.png"height="100"  alt="">
		</div>
        <div class="slide">
			<img src="image/best/15gmb.png"height="100"  alt="">
		</div>
        <div class="slide">
			<img src="image/best/16gmb.png"height="100"  alt="">
		</div>
	</div>
</div>
  
</body></html>
    <footer class="footer">
                <div class="footer-left">
        
                    <div class="credit-cards">
                        <img src="image/visa.png" alt="">
                        <img src="image/mastercard.png" alt="">
                        <img src="image/paypal.png" alt="">
                    </div>
                    <p class="footer-copyright">Copyright © 2023 ourmotif</p>
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
                        <p><a href="#">ourmotif@gmail.com</a></p>
                    </div>
                </div>

                <div class="footer-right">
                    <p class="footer-about">
                        <span>About</span>
                        Support us biar semangat hehehe :)
                    </p>

                    <div class="footer-media">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="https://instagram.com/xd_dazzling?igshid=MzRlODBiNWFlZA=="><i class="fa fa-instagram"></i></a>
                        
                    </div>
                </div>

            </footer>

