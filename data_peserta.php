<?php
include('../inc/auth_admin.php');
include('../inc/config.php');
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peserta</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Data Peserta</h2>
    <table border="1">
        <tr><th>No</th><th>Nama</th><th>Email</th></tr>
        <?php $no=1; while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
