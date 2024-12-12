<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    <style>
        /* membuat styling pada table*/
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
<ul>
    <li><a href="../barang/index.php">Data barang</a></li>
    <li><a href="../penyedia/index.php">Data penyedia</a></li>
</ul>
    <h2>Data penyedia<h/2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
        <table>
        <thead>
        <tr align="center">
        <th> # </th>
        <th>Nama Penyedia</th>
        <th>Kontak</th>
        <th><a href="../penyedia/tambah_penyedia.php">Tambah Data</a></th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $no = 1;
        $query = $db->query("SELECT * FROM tb_penyedia");
        while ($penyedia = $query->fetch_assoc()){
        ?>
<tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $penyedia['nama'] ?></td>
        <td><?php echo $penyedia['kontak'] ?></td>
        <td align="center">
        <a href="edit_penyedia.php?penyedia_id=<?php echo $penyedia['penyedia_id'] ?>">Edit</a>
        <a onclick="return confirm('Anda yakin ingin menghapus data?')"
        href="hapus_penyedia.php?penyedia_id=<?php echo $penyedia['penyedia_id'] ?>">Hapus</a>
        </td> 
        </tr>
        <?php
        }
        ?>
        </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>