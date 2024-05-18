<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "tabel_sales";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_error()) {
die("error connecting to database: " . mysql_connect_error());
}

echo "koneksi berhasil";

?>