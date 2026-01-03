<?php
require_once 'Koneksi.php';

/* TAMBAH */
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn,"INSERT INTO mahasiswa (nama, kelas, jurusan) VALUES ('$nama','$kelas','$jurusan')");

    header("Location: ../admin/dashboard.php?page=mahasiswa");
}

/* UPDATE */
if (isset($_POST['update'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn,
        "UPDATE mahasiswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE no=$no");

    header("Location: ../admin/dashboard.php?page=mahasiswa");
}

/* HAPUS */
if (isset($_GET['hapus'])) {
    $no = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE no=$no");

    header("Location: ../admin/dashboard.php?page=mahasiswa");
}
