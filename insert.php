<?php

// Mengkoneksikan ke database
include('connection.php');

// Menerima data dari form dengan menyimpannya ke dalam variabel sesuai name input
$nama = $_POST['nama']; // Sesuaikan dengan method yang digunakan, misal: POST atau GET
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Menambahkan data dari PHP ke database
$insert = mysqli_query($connect, "INSERT INTO karyawan SET nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin' ");

// Event Handling
if ($insert) {
    header('Location: list.php'); // Arahkan ke list.php
} else {
    echo "Input data gagal!"; // Pesan error
}