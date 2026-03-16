<?php
    //buat pengecekan terlebih dahulu apakah variable kota ada pada url
    //jika ada maka nilai url yang akan digunakan, jika tidak maka akan false
    $kota_id = isset($_GET['kota_id']) ? $_GET['kota_id'] : false;

    $kota = "";
    $tarif = "";
    $status = "";
    $button = "Add";

    if ($kota_id){
        $queryKota = mysqli_query($koneksi, "SELECT * FROM kota WHERE kota_id='$kota_id'");
        $row = mysqli_fetch_assoc($queryKota);

        $kota = $row['kota'];
        $tarif = $row['tarif'];
        $status = $row['status'];
        $button = "Update";
    }

?>

<form action="<?php echo BASE_URL."module/kota/action.php?kota_id=$kota_id"; ?>" method="POST">
<!-- encytype digunakan untuk upload file ke dalam server -->


    <div class="login form">
        <label>City</label>
        <span>
            <input type="text" name="kota" value="<?php echo $kota; ?>">
        </span>
    </div>

    <div class="login form">
        <label>Rates</label>
        <span>
            <input type="text" name="tarif" value="<?php echo $tarif; ?>" />
        </span>
    </div>

    <div class="element-form">
        <label>Status</label>
        <span>
            <input type="radio" name="status" value="on" <?php if($status == "on") {echo "checked='true'";} ?> /> On
            <input type="radio" name="status" value="off" <?php if($status == "off") {echo "checked='true'";} ?> /> Off
        </span>
    </div>
    <div class="login form">
        <span>
            <input type="submit" name="button" value="<?php echo $button; ?>" />
        </span>
    </div>
</form>