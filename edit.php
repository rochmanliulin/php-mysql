<?php

// Koneksi ke database
include('connection.php');

// Menyimpan id yang dikirim melalui URL dalam bentuk query string
$id = $_GET['id'];

// Menampilkan data dari database yang id nya sama
$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE id='$id' ");
// Mengubah ke array multidimensi
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <form action="update.php" method="post">
        <!-- Agar dapat mengupdate data secara spesifik -->
        <input type="hidden" name="id" value="<?php echo $result[0]['id'] ?>">

        <label for="nama">Nama :</label><br>
        <input type="text" name="nama" value="<?php echo $result[0]['nama'] ?>"><br><br>

        <label for="alamat">Alamat :</label><br>
        <textarea name="alamat" cols="30" rows="5"><?php echo $result[0]['alamat'] ?></textarea><br><br>

        <label for="umur">Umur :</label><br>
        <input type="text" name="umur" value="<?php echo $result[0]['umur'] ?>"><br><br>

        <label for="jenis_kelamin">Jenis Kelamin :</label><br>
        <select name="jenis_kelamin">
            <option value="Pria" <?php echo ($result[0]['jenis_kelamin'] == "Pria") ? 'selected' : ''; ?>>Pria</option>
            <option value="Wanita" <?php echo ($result[0]['jenis_kelamin'] == "Wanita") ? 'selected' : ''; ?>>Wanita</option>
        </select><br><br><br>

        <button type="submit">Perbaharui</button>
    </form>
</body>
</html>