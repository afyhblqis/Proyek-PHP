<?php
include('../inc/config.php');

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($cek) == 0) {
        mysqli_query($conn, "INSERT INTO users(nama,email,password) VALUES('$nama','$email','$password')");
        header("Location: login.php");
    } else {
        $error = "Email sudah digunakan.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Register</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <input type="text" name="nama" placeholder="Nama Lengkap" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="register">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="login.php">Login</a></p>
</body>
</html>
