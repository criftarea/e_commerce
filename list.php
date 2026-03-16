<?php
    $no = 1;
    $queryAdmin = mysqli_query($koneksi, "SELECT * FROM user ORDER BY nama ASC");

    if(mysqli_num_rows($queryAdmin) == 0){
        echo"<h3> No data yet </h3>";
    }else{
        echo "<table class='table-list'>";

        echo"<tr class='baris-title'>
                <th class='kolom-nomor'>No</h3>
                <th class='kiri'>Name</h3>
                <th class='kiri'>Email</h3>
                <th class='kiri'>Phone</h3>
                <th class='kiri'>Level</h3>
                <th class='tengah'>Status</h3>
                <th class='tengah'>Action</h3>
        </tr>";

        while($rowUser=mysqli_fetch_assoc($queryAdmin)){
            echo "<tr>
                    <td class='kolom-nomor'>$no</td>
                    <td>$rowUser[nama]</td>
                    <td>$rowUser[email]</td>
                    <td>$rowUser[phone]</td>
                    <td>$rowUser[level]</td>
                    <td class='tengah'>$rowUser[status]</td>
                    <td class='tengah'>
                        <a class='tombol-action' href='".BASE_URL. "index.php?page=my_profile&module=user&action=form&user_id=$rowUser[user_id]'>Edit</a>
                    </td>
            </tr>";
            $no++;
        }
        echo "</table>";
    }
?>