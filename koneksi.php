<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "e_commerce";

$koneksi = mysqli_connect($server, $user, $password, $nama_database) or die ("koneksi gagal");
?>