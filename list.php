<div id="frame-tambah">
    <a href="<?php echo BASE_URL. "index.php?page=my_profile&module=kota&action=form"; ?>" class="tombol-action"> + Add </a>
</div>

<?php
    $queryKota = mysqli_query($koneksi, "SELECT * FROM kota"); //digunakan untuk mengambil data yang ada pada table kota

    //lakukan pengecekan apakah hasil query memiliki data, jika tidak ada maka akan tampil sebuah pesan
    if(mysqli_num_rows($queryKota) == 0){
        echo "<h3> No data yet </h3>";
    }else{
        echo "<table class='table-list'>"; //jika ada maka data akan dikeluarkan yaitu dengan menambahkan table

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>
                <th class='kiri'>City</th>
                <th class='kiri'>Rates</th>
                <th class='tengah'>Status</th>
                <th class='tengah'>Action</th>
             </tr>";

            $no = 1; //while adalah fungsi perulangan yang kita gunakan untuk mengeluarkan semua data yang ada pada table kota
            while($rowKota = mysqli_fetch_assoc($queryKota)){

                echo "<tr>
                        <td class='kolom-nomor'>$no</td>
                        <td class='kiri'>$rowKota[kota]</td>
                        <td class='kiri'>".rupiah($rowKota['tarif'])."</td>
                        <td class='tengah'>$rowKota[status]</td>
                        <td class='tengah'>
                            <a class='tombol-action' href='".BASE_URL. "index.php?page=my_profile&module=kota&action=form&kota_id=$rowKota[kota_id]'>Edit</a>
                        </td>
                     </tr>";
                $no++;
            }

        echo "</table>";
    }
    
?>