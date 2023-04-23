<?php

// Mengkoneksikan file connection.php ke list.php
include('connection.php');

// $query -> Variable untuk menyimpan return value mysqli_query
// mysqli_query -> Mengquerikan/membuat query data di dalam database yang sudah di pilih
// Parameter 1 -> Mengambil variabel yang terkoneksi
// Parameter 2 -> Query SQL syntax apa yang ingin dilakukan, misal menampilkan data tabel karyawan
$query = mysqli_query($connect, "SELECT * FROM karyawan");

// mysqli_fetch_all -> Mengambil data dari mysqli_query
// Parameter 1 -> Mengambil return value dari data yang diambil
// Parameter 2 -> Konstanta yang sudah di define oleh PHP untuk mengembalikan array assosiatif
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
    <br>

    <a href="add.php">Tambah Data</a>
    
    <br><br><br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
        </tr>

        <!-- Tampilkan data -->
        <?php foreach ($results as $key => $value): ?>
            <tr>
                <td><?php echo $value['nama']; ?></td>
                <td><?php echo $value['alamat']; ?></td>
                <td><?php echo $value['umur']; ?></td>
                <td><?php echo $value['jenis_kelamin']; ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>