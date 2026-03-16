<div id="frame-tambah">
    <a href="<?php echo BASE_URL. "index.php?page=my_profile&module=kategori&action=form"; ?>" class="tombol-action"> + Add category </a>
</div>

<?php
    $queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori"); //digunakan untuk mengambil data yang ada pada table kategori

    //lakukan pengecekan apakah hasil query memiliki data, jika tidak ada maka akan tampil sebuah pesan
    if(mysqli_num_rows($queryKategori) == 0){
        echo "<h3> No data yet </h3>";
    }else{
        echo "<table class='table-list'>"; //jika ada maka data akan dikeluarkan yaitu dengan menambahkan table

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>
                <th class='kiri'>Category</th>
                <th class='tengah'>Status</th>
                <th class='tengah'>Action</th>
             </tr>";

            $no = 1; //while adalah fungsi perulangan yang kita gunakan untuk mengeluarkan semua data yang ada pada table kategori
            while($row = mysqli_fetch_assoc($queryKategori)){

                echo "<tr>
                        <td class='kolom-nomor'>$no</td>
                        <td class='kiri'>$row[kategori]</td>
                        <td class='tengah'>$row[status]</td>
                        <td class='tengah'>
                            <a class='tombol-action' href='".BASE_URL. "index.php?page=my_profile&module=kategori&action=form&kategori_id=$row[kategori_id]'>Edit</a>
                        </td>
                     </tr>";
                $no++;
            }

        echo "</table>";
    }
    
?>