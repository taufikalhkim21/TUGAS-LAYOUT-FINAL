<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);


if (!isset($_SESSION['user'])) {
    header('location: ../PHP/auth/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo-side">
            <h1>MyPorto</h1>
        </div>
        <ul class="menu">
            <li class="active">
                <a href="<?= 'dashboard.php' ?>"><i class="fa-solid fa-gauge-high"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="<?= 'dashboard.php?page=about' ?>"><i class="fa-solid fa-address-card"></i><span>About</span></a>
            </li>
            <li>
                <a href="<?= 'dashboard.php?page=mahasiswa' ?>"><i class="fa-solid fa-user"></i><span>Mahasiswa</span></a>
            </li>
            <li>
                
                <a href="<?= 'dashboard.php?page=jadwal-kuliah' ?>"><i class="fa-solid fa-calendar"></i><span>Jadwal Kuliah</span></a>
            </li>
            <li>
                <a href="<?= 'dashboard.php?page=kontak' ?>"><i class="fa-solid fa-id-card-clip"></i><span>Kontak</span></a>
            </li>
            <li>
                <a href="<?= 'dashboard.php?page=artikel' ?>"><i class="fa-solid fa-newspaper"></i><span>Artikel</span></a>
            </li>
            <li>
                <a href="<?= 'dashboard.php?page=pengumuman' ?>"><i class="fa-solid fa-bullhorn"></i><span>Pengumuman</span></a>
            </li>
            <li>
                <a href="<?= 'dashboard.php?page=dukungan' ?>"><i class="fa-solid fa-envelope"></i><span>Dukungan</span></a>
            </li>
            <li>
                <a href="<?= 'dashboard.php?page=keuangan' ?>"><i class="fa-solid fa-credit-card"></i><span>Keuangan</span></a>
            </li>
            <li class="logout">
                <a href="../PHP/auth/logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <?php
        $page = 'page/dashboard-main.php';
        if (isset($_GET['page'])) {
            $page = 'page/' . $_GET['page'] . '.php';
        }
        require($page);
        ?>
    </div>


</body>

</html>