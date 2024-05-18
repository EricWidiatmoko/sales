<?php

include "koneksi.php";

$query = "select * from customer";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    echo "Query Gagal! ";
}   else {
    echo "<table border='1'>
        <tr>
            <th>nama_customer</th>
            <th>customer_id</th>
            <th>alamat</th>
            <th>transaksi</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>".$row['nama_customer']."</td>;
            <td>".$row['customer_id']."</td>;
            <td>".$row['alamat']."</td>;
            <td>".$row['transaksi']."</td>;
            <td>
                <a href='
                <a href='
        </tr>";
}

echo "</table>";

}
?>