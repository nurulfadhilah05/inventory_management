<?php
session_start();
include("../koneksi.php");

if (isset($_GET['penyedia_id'])){
$penyedia_id = $_GET['penyedia_id'];

$sql = "DELETE FROM tb_penyedia WHERE penyedia_id=$penyedia_id";
$query = mysqli_query($db, $sql);

if ($query){
    $_SESSION['notifikasi'] = "Data penyedia berhasil dihapus!";
} else {
    $_SESSION['notifikasi'] = "Data penyedia gagal dihapus!";
}

header('Location: index.php');


    
} else {
    die("Akses ditolak...");
}
?>