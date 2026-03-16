<?php
    //buat pengecekan terlebih dahulu apakah variable kategori ada pada url
    //jika ada maka nilai url yang akan digunakan, jika tidak maka akan false
    $kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;

    $kategori = "";
    $status = "";
    $button = "Add";

    //lakukan pengecekan kembali
    //jika var kategori ada maka kita akan melakukan query kategori untuk mengambil nilai
    //sesuai kategori id yang ada pada url berdasarkan kolom kategori id, kemudian keluarkan datanya
    if ($kategori_id){
        $queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori_id='$kategori_id'");
        $row = mysqli_fetch_assoc($queryKategori);

        //ubah variable kategori dengan nilai kolom dari table kategori
        $kategori = $row['kategori'];
        $status = $row['status'];
        $button = "Update";
    }
?>

<form action="<?php echo BASE_URL."module/kategori/action.php?kategori_id=$kategori_id"; ?>" method="POST">

    <div class="login form">
        <label>Category</label>
        <span>
            <input type="text" name="kategori" value="<?php echo $kategori; ?>" />
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