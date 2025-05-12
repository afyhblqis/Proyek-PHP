<?php
include('../inc/auth_admin.php');
include('../inc/config.php');

$result = mysqli_query($conn, "SELECT p.*, u.nama, k.nama_kursus FROM pendaftaran p 
    JOIN users u ON p.user_id = u.id 
    JOIN kursus k ON p.kursus_id = k.id");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Data Pendaftaran</h2>
    <table border="1">
        <tr><th>No</th><th>Nama Peserta</th><th>Kursus</th><th>Tanggal Daftar</th></tr>
        <?php $no=1; while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nama_kursus']; ?></td>
            <td><?= $row['tanggal_daftar']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
