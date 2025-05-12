<?php
include('../inc/auth_admin.php');
include('../inc/config.php');

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    mysqli_query($conn, "INSERT INTO kursus(nama_kursus) VALUES('$nama')");
}
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM kursus WHERE id='$id'");
}
$kursus = mysqli_query($conn, "SELECT * FROM kursus");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola Kursus</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Data Kursus</h2>
    <form method="post">
        <input type="text" name="nama" placeholder="Nama Kursus" required>
        <button type="submit" name="tambah">Tambah</button>
    </form>
    <br>
    <table border="1">
        <tr><th>No</th><th>Nama Kursus</th><th>Aksi</th></tr>
        <?php $no=1; while($row = mysqli_fetch_assoc($kursus)) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_kursus']; ?></td>
            <td><a href="?hapus=<?= $row['id']; ?>" onclick="return confirm('Hapus kursus ini?')">Hapus</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
