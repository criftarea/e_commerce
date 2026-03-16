<?php
    if($user_id == false){
        $_SESSION["proses_pesanan"] = true;

        header("location: ".BASE_URL."index.php?page=login");
        exit;
    }
?>

<br><br>
<center>
<div id="frame-data-pengiriman">

<h3 class="label-data-pengiriman">Shipping Address</h3>

    <div id="frame-form-pengiriman">
        
    <form action="<?php echo BASE_URL."proses_pemesanan.php"; ?>" method="POST">

        <div class="login form">
            <span><input type="text" name="nama_penerima" placeholder="RECIPIENT'S NAME"/></span>
        </div>

        <div class="login form">
            <span><input type="text" name="nomor_telepon" placeholder="PHONE NUMBER"/></span>
        </div>

        <div class="login form">
            <span><input type="text" name="alamat" placeholder="SHIPPING ADDRESS"/></span>
        </div>

        <div class="login form">
            <label>CITY</label>
                <select name="kota">
                    <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM kota");

                        while($row=mysqli_fetch_assoc($query)){
                            echo "<option value='$row[kota_id]'>$row[kota] (".rupiah($row["tarif"]).")</option";
                        }
                    ?>
                    <br>
                    <br>
                </select>
        </div>

        <div class="login form">
        <input type="submit" class="button" value="SUBMIT">
        </div>
        </form>
    </div>
 </div>

    <br>
    <br>
    
    <div id="frame-data-detail">
    <h3 class="label-data-pengiriman">Detail Order</h3>
    <div id="frame-detail-order">
        <table class="table-list">
            <tr>
                <th class='kiri'>Unit Name</th>
                <th class='tengah'>Qty</th>
                <th class='kanan'>Total</th>
            </tr>

<?php 
                $subtotal = 0;
                foreach($keranjang AS $key => $value){

                    $barang_id = $key;

                    $nama_barang = $value['nama_barang'];
                    $harga = $value['harga'];
                    $quantity = $value['quantity'];

                    $total = $quantity * $harga;
                    $subtotal = $subtotal + $total;
                
                echo "<tr>
                        <td class='kiri'>$nama_barang</td>
                        <td class='tengah'>$quantity</td> 
                        <td class='kanan'>".rupiah($total)."</td>
                    </tr>";
                }
                echo "<tr>
                        <td colspan='2' class='kanan'><b>Sub Total</b></td>
                        <td class='kanan'><b>".rupiah($subtotal)."</b></td>
                    </tr>";

                ?>
</center>
            </table>
            </div>
        </div>
        <br><br>