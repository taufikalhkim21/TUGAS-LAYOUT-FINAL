<?php
require_once __DIR__ . '/../../PHP/Koneksi.php';


/* DATA EDIT */
$edit = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit = mysqli_fetch_assoc(
        mysqli_query($conn, "SELECT * FROM matkul WHERE id=$id")
    );
}

$data = mysqli_query($conn, "SELECT * FROM matkul ORDER BY id DESC");
?>

<link rel="stylesheet" href="../CSS/mahasiswa.css">

<div class="content-wrapper">
    <h2>Jadwal Mata Kuliah</h2>
    <!-- FORM -->
    <div class="form-box">
        <form method="POST" action="../PHP/crud-matkul.php">
            <input type="hidden" name="id" value="<?= $edit['id'] ?? '' ?>">

            <input type="text" name="matkul" placeholder="Mata Kuliah" required
                value="<?= $edit['matkul'] ?? '' ?>">

            <input type="text" name="kelas" placeholder="Kelas" required
                value="<?= $edit['kelas'] ?? '' ?>">

            <input type="text" name="jurusan" placeholder="Jurusan" required
                value="<?= $edit['jurusan'] ?? '' ?>">

            <?php if ($edit): ?>
                <button type="submit" name="update">Update Data</button>
            <?php else: ?>
                <button type="submit" name="tambah">Tambah Data</button>
            <?php endif; ?>
        </form>
    </div>

    <!-- TABLE -->
    <div class="table">
        <table>
            <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1;
            while ($row = mysqli_fetch_assoc($data)) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['matkul'] ?></td>
                    <td><?= $row['kelas'] ?></td>
                    <td><?= $row['jurusan'] ?></td>
                    <td class="aksi">
                        <a class="edit"
                            href="dashboard.php?page=jadwal-kuliah&edit=<?= $row['id'] ?>">
                            Edit
                        </a>
                        <a class="hapus"
                            href="../PHP/crud.php?hapus=<?= $row['id'] ?>"
                            onclick="return confirm('Yakin hapus data?')">
                            Hapus
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>


</div>