<?php

    $banner_id = isset($_GET['banner_id']) ? $_GET['banner_id'] : "";

    $banner = "";
    $link   = "";
    $gambar = "";
    $keterangan_gambar = "";
    $status = "";

    $button= "Add";

    if($banner_id != ""){
        $button = "Update";

        $queryBanner = mysqli_query($koneksi, "SELECT * FROM banner WHERE banner_id='$banner_id'");
        $row = mysqli_fetch_array($queryBanner);

        $banner = $row["banner"];
        $link   = $row["link"];
        $gambar = "<img src='". BASE_URL."image/slide/$row[gambar]' style='width: 200px; vertical-align: middle;' />";
        $keterangan_gambar = "(click 'Select picture' only if you want to change it)";
        $status = $row["status"];
    }
?>

<form action="<?php echo BASE_URL."module/banner/action.php?banner_id=$banner_id" ?>" method="POST" enctype="multipart/form-data">

    <div class="login form">
        <label>Banner</label>
            <span><input type="text" name="banner" value="<?php echo $banner; ?>" /></span>
    </div>

    <div class="login form">
        <label>Link</label>
            <span><input type="text" name="link" value="<?php echo $link; ?>" /></span>
    </div>

    <div class="element-form">
        <label>Picture <?php echo $keterangan_gambar; ?></label>
            <span><input type="file" name="file" value="<?php echo $gambar; ?>" /><?php echo $gambar; ?></span>
    </div>

    <div class="element-form">
        <label>Status</label>
        <span>
            <input type="radio" name="status" value="on" <?php if($status == "on") {echo "checked='true'";} ?> /> On
            <input type="radio" name="status" value="off" <?php if($status == "off") {echo "checked='true'";} ?> /> Off
        </span>
    </div>

    <div class="login form">
            <span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
    </div>
</form>