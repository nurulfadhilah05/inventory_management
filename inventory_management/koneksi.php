<?php
// Menetukan nama host, "biasanya localhost"
$server = "localhost";
// Nama apengguna mysql (default: root)
$user = "root";
// Kata sandi untuk pengguna MySQL (default: kosong untuk root)
$password = "";
// Nama basis data ang akan dihubungkan
$nama_database = "inventory_management";

// Mencoba untuk membuat koneksi ke basis data
$db = mysqli_connect($server, $user,

// Mencoba untuk membuat koneksi ke basis data
$password, $nama_database);

// Memeriksa apakah koneksi berhasil
if (!$db) {
    die("Gagal terhubung dengan databse: " . mysqli_connect_error());
}
?>