<?php
include('../inc/auth_user.php');
include('../inc/config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard User</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['user_name']; ?>!</h2>
    <nav>
        <a href="daftar.php">Daftar Kursus</a> |
        <a href="riwayat.php">Riwayat</a> |
        <a href="../logout.php">Logout</a>
    </nav>
</body>
</html>
