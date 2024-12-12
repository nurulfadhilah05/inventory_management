<?php

session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $nama=$_POST['nama'];
    $kontak =$_POST['kontak'];

    $sql = "INSERT INTO tb_penyedia
    (nama, kontak)
    VALUES ('$nama', '$kontak')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data penyedia berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data penyedia gagal ditambahkan!";
}
header('location: index.php');
} else {
die("Akses ditolak...");
}
?>
