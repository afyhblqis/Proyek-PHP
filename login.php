<?php
session_start();
include('../inc/config.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    $data = mysqli_fetch_assoc($result);

    if ($data) {
        $_SESSION['user_id'] = $data['id'];
        $_SESSION['user_name'] = $data['nama'];
        header("Location: dashboard.php");
    } else {
        $error = "Email atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login User</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Login User</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
</body>
</html>
