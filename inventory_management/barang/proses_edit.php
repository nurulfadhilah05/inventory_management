<?php

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $barang_id = $_POST['barang_id'];
    $nama = $_POST['nama'];
    $stok = $_POST ['stok'];
    $harga = $_POST ['harga'];

    $sql = "UPDATE tb_barang SET
    nama ='$nama',
    stok ='$stok',
    harga ='$harga'
    WHERE barang_id=$barang_id";

    $query = mysqli_query($db, $sql);

    if ($query) {
      $_SESSION['notifikasi'] = "Data barang berhasil diperbarui!";
    } else {
      $_SESSION['notifikasi'] = "Data barang gagal diperbarui!";
    }

    header('location: index.php');
} else {

    die("Akses ditolak");
}
?>