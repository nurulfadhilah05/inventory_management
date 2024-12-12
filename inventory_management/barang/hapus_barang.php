<?php
session_start();
include("../koneksi.php");

if (isset($_GET['barang_id'])){
$barang_id = $_GET['barang_id'];

$sql = "DELETE FROM tb_barang WHERE barang_id=$barang_id";
$query = mysqli_query($db, $sql);

if ($query){
    $_SESSION['notifikasi'] = "Data barang berhasil dihapus!";
} else {
    $_SESSION['notifikasi'] = "Data barang gagal dihapus!";
}

header('Location: index.php');


} else {
	die("Akses ditolak...");
}
?>