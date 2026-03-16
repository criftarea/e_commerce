<?php

    include_once("function/koneksi.php");
    include_once("function/helper.php");

    $email      = $_POST['email'];
    $password   = md5($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password' AND status='on'");

    if(mysqli_num_rows($query) == 0){ //jika tidak email akan dikembalikan pada halaman login
        header("location:". BASE_URL . "index.php?page=login&notif=true");
    }else{
        //namun jika datanya ada kita akan mengeluarkan data dari user tersebut menggunakan fungsi assoc
        $row = mysqli_fetch_assoc($query);

        session_start();

        $_SESSION['user_id'] = $row['user_id']; //untuk menyimpan data dari user
        $_SESSION['nama'] = $row['nama']; //data di ambil dari kolom user, nama dan level
        $_SESSION['level'] = $row['level'];

        if(isset($_SESSION["proses_pesanan"])){
            unset($_SESSION["proses_pesanan"]);
            header("location: ".BASE_URL."index.php?page=data_pemesanan");
        }else{
            header("location: ".BASE_URL."index.php?page=my_profile&module=pesanan&action=list");
                //header digunakan untuk melihat lokasi jika kita berhasil login maka url akan beralih ke page my_profile
        }
    }
?>