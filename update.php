<?php

// Mengkoneksikan ke database
include('connection.php');

// Menerima data dari form dengan menyimpannya ke dalam variabel sesuai name input
$id = $_POST['id']; // Menerima id agar update data dilakukan secara spesifik
$nama = $_POST['nama']; // Sesuaikan dengan method yang digunakan, misal: POST atau GET
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Menambahkan data dari PHP ke database
$update = mysqli_query($connect, "UPDATE karyawan SET nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin' WHERE id='$id' ");

// Event Handling
if ($update) {
    header('Location: list.php'); // Arahkan ke list.php
} else {
    echo "Update data gagal!"; // Pesan error
}