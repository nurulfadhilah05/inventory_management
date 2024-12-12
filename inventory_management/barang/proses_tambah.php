<?php

session_start();

include("../koneksi.php");

if(isset($_POST['simpan'])){

    $nama =$_POST['nama'];
    $stok =$_POST['stok'];
    $harga =$_POST['harga'];

    $sql = "INSERT INTO tb_barang
    (nama, stok, harga)
    VALUES ('$nama','$stok','$harga')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data barang berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data barang gagal ditambahkan!";
	}
header('Location: index.php');
} else {
die("Akses ditolak...");
}
?>
