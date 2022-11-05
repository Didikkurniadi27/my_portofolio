<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myporto";

//Buat Koneksi
$conn = mysqli_connect($serverName,$userName,$password,$dbName);

if (!$conn) {
    die("Koneksi Gagal " . mysqli_connect_error());
}

?>