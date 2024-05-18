<?php
// Mulai sesi
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika tidak, arahkan kembali ke halaman login
    header("Location: login.php");
    exit();
}

// Jika sudah login, tampilkan halaman beranda
echo "Welcome, ".$_SESSION['username']."!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>Home</h2>
    <p>This is the home page. You are logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
