
<div id="container-user-akses">
    <form action="<?php echo BASE_URL. "proses_register.php"; ?>" method="POST">

        <?php
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            $nama = isset($_GET['nama']) ? $_GET['nama'] : false;
            $email = isset($_GET['email']) ? $_GET['email'] : false;
            $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
            $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

            if($notif == "require"){
                echo "<div class='notif'> Please fill in completely</div>";
            }else if ($notif == "password") {
                echo "<div class='notif'> Password does not match</div>";
            }else if($notif == "email") {
                echo "<div class='notif'> E-mail address already registered</div>";
            }
        ?>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="style.css">
        </head>
        <div class="element-form">
        <body>
  <div class="container2">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>HELLO ! ˗ˋˏ♡ˎˊ˗</header>
      <form action="#">
            
                <input type="text" name="nama" placeholder="NAME" value="<?php echo $nama; ?>" />
        
                <input type="text" name="email" placeholder="EMAIL ADDRESS" value="<?php echo $email; ?>" />
            
                <input type="text" name="phone" placeholder="PHONE NUMBER" value="<?php echo $phone; ?>"/>
            
                <input type="text" name="alamat" placeholder="ADDRESS" ><?php echo $alamat; ?> </textarea>
            
                <input type="password" name="password" placeholder="PASSWORD" />
            
                <input type="password" name="re_password" placeholder="RE-TYPE PASSWORD" />
            
            <center>
            <input type="submit" class="button" VALUE="CREATE" />
            
            <br>
            <a href="index.php?page=login">OR SIGN IN</a>
        </center>
        </div>
    </form>
</div>