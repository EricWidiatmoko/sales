<?php
// Mulai sesi
session_start();

// Daftar pengguna yang valid (ini bisa disimpan di database)
$valid_users = array(
    'user1' => 'password1',
    'user2' => 'password2'
);

// Mendapatkan username dan password dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Memeriksa apakah pengguna ada di daftar pengguna yang valid
if (array_key_exists($username, $valid_users) && $valid_users[$username] == $password) {
    // Login berhasil, simpan username dalam sesi
    $_SESSION['username'] = $username;
    // Arahkan ke halaman beranda
    header("Location: home.php");
} else {
    // Login gagal, tampilkan pesan kesalahan
    echo "Login failed. Invalid username or password.";
}
?>