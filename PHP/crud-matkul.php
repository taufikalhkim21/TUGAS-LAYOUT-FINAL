<?php
require_once 'Koneksi.php';

/* TAMBAH */
if (isset($_POST['tambah'])) {
    $matkul = $_POST['matkul'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn,"INSERT INTO matkul (matkul, kelas, jurusan) VALUES ('$matkul','$kelas','$jurusan')");

    header("Location: ../admin/dashboard.php?page=jadwal-kuliah");
}

/* UPDATE */
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $matkul = $_POST['matkul'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn,
        "UPDATE matkul SET matkul='$matkul', kelas='$kelas', jurusan='$jurusan' WHERE id=$id");

    header("Location: ../admin/dashboard.php?page=jadwal-kuliah");
}

/* HAPUS */
if (isset($_GET['hapus'])) {
    $no = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM matkul WHERE id=$id");

    header("Location: ../admin/dashboard.php?page=jadwal-kuliah");
}
