<?php

    $pesanan_id = $_GET["pesanan_id"];

?>

<table class="table-list">
<h3><center>PAYMENT</center></h3>
<br>
    <form action="<?php echo BASE_URL."module/pesanan/action.php?pesanan_id=$pesanan_id"; ?>" method="POST">

        <div class="element-form">
            <span><input type="text" name="nomor_rekening" placeholder="ACCOUNT NUMBER"/></span>
        </div>

        <div class="element-form">
            <span><input type="text" name="nama_account" placeholder="ACCOUNT NAME"/></span>
        </div>

        <div class="element-form">
            <span><input type="date" name="tanggal_transfer" placeholder="TRANSFER DATE"/></span>
        </div>

        <div class="element-form">
            <span><input type="submit" value="Confirmation" name="button" /></span>
        </div>

    </form>

</table>