<?php
include('../inc/auth_admin.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Selamat Datang, <?php echo $_SESSION['admin_name']; ?>!</h2>
    <nav>
        <a href="data_kursus.php">Kelola Kursus</a> |
        <a href="data_peserta.php">Data Peserta</a> |
        <a href="data_pendaftaran.php">Data Pendaftaran</a> |
        <a href="statistik.php">Statistik</a> |
        <a href="export.php">Export</a> |
        <a href="../logout.php">Logout</a>
    </nav>
</body>
</html>
