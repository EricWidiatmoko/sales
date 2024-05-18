<?php
include "koneksi.php";
$id     = $_GET ['id'];
$sql    = "SELECT * FROM customer WHERE customer_id = '$id'";
$result = mysqli_query($koneksi, $sql);
if (!$result) {
    echo "Query Gagal";
}
 else {
    $data = mysqli_fetch_assoc($result);
}
if (isset($_POST['submit'])) {
    $nama       = $_POST['nama_customer'];
    $alamat     = $_POST['alamat'];
    $transaksi  = $_POST['transaksi'];
    $sql        = "UPDATE customer SET nama_customer='$nama', alamat='$alamat', transaksi='$transaksi' WHERE id = '$id'";
    $result     = mysqli_query($koneksi, $sql);
    if (!$result) {
        echo "Data gagal diubah";
    } else {
        echo "Data berhasil diubah";
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="vewport" content="width=device-width, initial-scale-1.0"><title>Edit Data Master</title>
</head>

<body>
    <h2>Edit Data Master</h2>
    <form method="post">
        <input type="hidden" name="id" value="<php echo $data ['id']; ?>">
        <label for= "nama">Nama: </label><br>
        <input type="text" id="name" name="name" value="<?php echo $data['nama']; ?>"><br> 
        <label for="id">id:</label><br>
        <input type="text" id="id" name="id" value="<?php echo $data['id']; ?>"><br> 
        <label for="alamat">Alamat</label><br>
        <input type="text"><?php echo $data['alamat']; ?><br><br>
        <input type="submit" name="update" value="update">
    </form>
</body>

</html>