<?php
include('../inc/auth_user.php');
include('../inc/config.php');

$user_id = $_SESSION['user_id'];

if (isset($_POST['submit'])) {
    $kursus_id = $_POST['kursus_id'];
    mysqli_query($conn, "INSERT INTO pendaftaran(user_id, kursus_id, tanggal_daftar) VALUES('$user_id', '$kursus_id', NOW())");
    $sukses = "Berhasil mendaftar kursus.";
}
$kursus = mysqli_query($conn, "SELECT * FROM kursus");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kursus</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Form Pendaftaran Kursus</h2>
    <?php if (isset($sukses)) echo "<p style='color:green;'>$sukses</p>"; ?>
    <form method="post">
        <select name="kursus_id" required>
            <option value="">-- Pilih Kursus --</option>
            <?php while ($k = mysqli_fetch_assoc($kursus)) { ?>
                <option value="<?= $k['id']; ?>"><?= $k['nama_kursus']; ?></option>
            <?php } ?>
        </select><br>
        <button type="submit" name="submit">Daftar</button>
    </form>
</body>
</html>
