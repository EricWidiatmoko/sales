<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama       = $_POST['nama_customer'];
    $id         = $_POST['customer_id'];
    $alamat     = $_POST['alamat'];
    $transaksi  = $_POST['transaksi'];
    $sql        = "INSERT INTO customer (nama, id, alamat, transaksi) VALUES ('$nama_customer', '$customer_id', '$alamat', '$transaksi')";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Customer</title>
</head>

<body>
    <h2>Tambah Data Customer</h2>
    <form method="post">
        <label for="nama_customer">nama_customer:</label><br>
        <input type="varchar" id="nama" nama="nama" required><br>
        <label for="id">id:</label><br>
        <input type="int" id="id" nama="id" required><br>
        <label for="alamat">alamat:</label><br>
        <input type="text" id="alamat" nama="alamat" required><br>
        <label for="transaksi">transaksi:</label><br>
        <input type="text" id="transaksi" nama="transaksi" required><br><br>
        <input type="submit" nama="submit" value="submit">
    </form>
</body>

</html>

