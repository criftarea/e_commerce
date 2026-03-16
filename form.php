<?php

    $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : "";

    $button = "Update";
    $queryUser = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$user_id'");

    $row = mysqli_fetch_assoc($queryUser);

    $nama = $row["nama"];
    $email = $row["email"];
    $phone = $row["phone"];
    $alamat = $row["alamat"];
    $status = $row["status"];
    $level = $row["level"];
?>

<form action="<?php echo BASE_URL."module/user/action.php?user_id=$user_id"; ?>" method="POST">
    <div class="login form">
        <label style="color:black;text-align:flex;font-size: 15px;"></label>
        <span  style="color:black;text-align:center;font-size: 15px;">
            <input type="text" name="nama" placeholder="NAME" value="<?php echo $nama; ?>" />
        </span>
    </div>
    <div class="login form">
        <label style="color:black;text-align:flex;font-size: 15px;"></label>
        <span style="color:black;text-align:center;font-size: 15px;">
            <input type="text" name="email" placeholder="EMAIL" value="<?php echo $email; ?>" />
        </span>
    </div>
    <div class="login form">
        <label style="color:black;text-align:flex;font-size: 15px;"></label>
        <span style="color:black;text-align:center;font-size: 15px;">
            <input type="text" name="phone" placeholder="PHONE NUMBER" value="<?php echo $phone;?>" />
        </span>
    </div>
    <div class="login form">
        <label style="color:black;text-align:flex;font-size: 15px;"></label>
        <span style="color:black;text-align:center;font-size: 15px;">
            <input type="text" name="alamat" placeholder="ADDRESS" value="<?php echo $alamat; ?>" />
        </span>
    </div>
    <div class="element-form">
        <label style="color:black;text-align:flex;font-size: 15px;">Level</label>
        <span style="color:black;text-align:flex;font-size: 15px;">
            <input type="radio" name="level" value="superadmin" <?php if($level == "superadmin") {echo "checked";} ?> /> Superadmin
            <input type="radio" name="level" value="customer" <?php if($level == "customer") {echo "checked";} ?> /> Customer
        </span>
    </div>
    <div class="element-form">
        <label style="color:black;text-align:flex;font-size: 15px;">Status</label>
        <span style="color:black;text-align:flex;font-size: 15px;">
            <input type="radio" name="status" value="on" <?php if($status == "on") {echo "checked";} ?> /> On
            <input type="radio" name="status" value="off" <?php if($status == "off") {echo "checked";} ?> /> Off
        </span>
    </div>
    <div class="login form">
        <span style="color:;text-align:flex;font-size: 15px;">
            <input type="submit" name="button" value="<?php echo $button; ?>" />
        </span>
    </div>
</form>