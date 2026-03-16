<?php 

    if($user_id){
        header("location: ".BASE_URL);
    }
?>
  <div id="container-user-akses">
      <form action="<?php echo BASE_URL."proses_login.php"; ?>" method="POST">
          <?php
              $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

              if($notif == true){
                  echo"<div class='notif'> E-mail or password is incorrect</div>";
              }
          ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container2">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>HELLO ! ˗ˋˏ♡ˎˊ˗</header>
      <form action="#">
        <input type="text"  name="email" placeholder="ENTER YOUR EMAIL">
        <input type="password" name="password" placeholder="ENTER YOUR PASSWORD">
        <a href="index.php?page=register">ALREADY HAVE AN ACCOUNT?</a>
        <input type="submit" class="button" value="LOGIN">
      </form>
    </div>
            </span>
         <!-- <label for="check">Login</label> -->
        </span>
      </div>
    </div>
  </div>

</body>
</html>

        <!-- <div class="element-form">
        <span>
                <input type="text" name="email" placeholder="EMAIL ADDRESS">
            </span>
        </div>
        <div class="element-form">
            <span>
                <input type="password" name="password" placeholder="PASSWORD">
            </span>
        </div>
        <div class="element-form">
            <center>
            <span>
                <input type="submit" value="SIGN IN">
            </span>
            <br>
            <a href="index.php?page=register">OR CREATE AN ACCOUNT</a>
            </center>
        </div>
    </form>
</div> -->