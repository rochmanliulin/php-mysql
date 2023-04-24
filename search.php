<?php

include('connection.php');

$keyword = $_GET['keyword'];

// Tampilkan sesuai dengan keyword yang di inputkan
$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE nama LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR umur LIKE '%$keyword%' OR jenis_kelamin LIKE '%$keyword%' ");
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
    <br><br>

    <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="Cari..." value="<?php echo $_GET['keyword'] ?>">
        <button type="submit">Cari</button>
    </form>
    <br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Pilihan</th>
        </tr>

        <!-- Tampilkan data -->
        <?php foreach ($results as $key => $value): ?>
            <tr>
                <td><?php echo $value['nama']; ?></td>
                <td><?php echo $value['alamat']; ?></td>
                <td><?php echo $value['umur']; ?></td>
                <td><?php echo $value['jenis_kelamin']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $value['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Apakah kamu ingin menghapusnya ?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>