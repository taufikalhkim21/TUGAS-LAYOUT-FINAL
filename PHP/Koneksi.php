<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'db_portoupi';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn){
    die ("Koneksi gagal ". mysqli_connect_error());
} else {
    // echo "Koneksi Berhasil";
}

?>