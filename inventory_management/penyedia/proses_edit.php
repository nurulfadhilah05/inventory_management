<?php

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $penyedia_id = $_POST['penyedia_id'];
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];

    $sql = "UPDATE tb_penyedia SET
    nama ='$nama',
    kontak ='$kontak'
    WHERE penyedia_id=$penyedia_id";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data penyedia berhasil diperbarui!";
    } else {
      $_SESSION['notifikasi'] = "Data penyedia gagal diperbarui!";
    }

    header('location: index.php');
} else {

    die("Akses ditolak");
}
?>