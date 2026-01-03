<?php
require_once __DIR__ . '/../../PHP/Koneksi.php';


$qMahasiswa = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa");
$totalMahasiswa = mysqli_fetch_assoc($qMahasiswa)['total'];

$qJurusan = mysqli_query($conn, "SELECT COUNT(DISTINCT jurusan) AS total FROM mahasiswa");
$totalJurusan = mysqli_fetch_assoc($qJurusan)['total'];

$qKelas = mysqli_query($conn, "SELECT COUNT(DISTINCT kelas) AS total FROM mahasiswa");
$totalKelas = mysqli_fetch_assoc($qKelas)['total'];

$qMatkul = mysqli_query($conn, "SELECT COUNT(DISTINCT matkul) AS total FROM matkul");
$totalMatkul = mysqli_fetch_assoc($qMatkul)['total'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../CSS/dashboard-main.css">
</head>
<body>
    <div class="dashboard-main">
        <!-- WELCOME -->
        <div class="welcome-box">
            <h2>Dashboard</h2>
            <p>Selamat datang di halaman admin</p>
        </div>

        <!-- STAT CARDS -->
        <div class="stat-cards">
            <div class="stat-card">
                <h4>Total Mahasiswa</h4>
                <span><?= $totalMahasiswa ?></span>
            </div>

            <div class="stat-card">
                <h4>Total Jurusan</h4>
                <span><?= $totalJurusan ?></span>
            </div>

            <div class="stat-card">
                <h4>Total Kelas</h4>
                <span><?= $totalKelas ?></span>
            </div>
        </div>
            <div class="stat-card">
                <h4>Total Mata Kuliah</h4>
                <span><?= $totalMatkul ?></span>
            </div>
        </div>

        <!-- INFO BOX -->
        <div class="info-box">
            <h3>Informasi</h3>
            <p>
                Gunakan menu di sidebar untuk mengelola data mahasiswa,
                jurusan, dan kelas. Pastikan data selalu diperbarui.
            </p>
        </div>
            <div class="logo">
            <img src="../IMAGE/logo.png" alt="#">
        </div>
    </div>
</body>

</html>