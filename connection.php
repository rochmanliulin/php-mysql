<?php

// Parameter myqsqli
// localhost -> Tempat mysql di install
// root -> Username database
// '' -> Password database
// latihan_dasar -> Nama database
// mysqli -> Mereturn boolean

// mysqli_connect -> Mengkoneksikan database dengan PHP
$connect = mysqli_connect('localhost', 'root', '', 'latihan_dasar');


if (!$connect)
    // Program di interupt/hentikan, jika terjadi kegagalan koneksi
    exit("Gagal koneksi database...");
