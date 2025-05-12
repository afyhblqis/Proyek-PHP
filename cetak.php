<?php
include('../inc/auth_user.php');
include('../inc/config.php');

$user_id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT p.*, k.nama_kursus FROM pendaftaran p JOIN kursus k ON p.kursus_id = k.id WHERE p.user_id='$user_id'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cetak Riwayat</title>
</head>
<body onload="window.print()">
    <h2>Riwayat Kursus</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kursus</th>
            <th>Tanggal Daftar</th>
        </tr>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_kursus']; ?></td>
            <td><?= $row['tanggal_daftar']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
