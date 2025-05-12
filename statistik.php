<?php
include('../inc/auth_admin.php');
include('../inc/config.php');

$jumlah_user = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users"));
$jumlah_kursus = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kursus"));
$jumlah_pendaftaran = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pendaftaran"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Statistik</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Statistik</h2>
    <ul>
        <li>Total User: <?= $jumlah_user; ?></li>
        <li>Total Kursus: <?= $jumlah_kursus; ?></li>
        <li>Total Pendaftaran: <?= $jumlah_pendaftaran; ?></li>
    </ul>
</body>
</html>
