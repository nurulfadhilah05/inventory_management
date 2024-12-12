<?php
session_start();
include("../koneksi.php"); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
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

    <h2>Data barang</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
        <table>
        <thead>
        <tr align="center">
        <th> # </th>
        <th>Nama Barang</th> 
        <th>Stok</th>
        <th>Harga</th>
        <th><a href="tambah_barang.php">Tambah Data</a></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1; 
        $query = $db->query("SELECT * FROM tb_barang");
        while ($barang = $query->fetch_assoc()){
        ?>

        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $barang['nama'] ?></td>
        <td><?php echo $barang['stok'] ?></td>
        <td><?php echo $barang['harga'] ?></td>
        <td align="center">
        <a href="edit_barang.php?barang_id=<?php echo $barang['barang_id'] ?>">Edit</a>
        <a onclick="return confirm('Anda yakin ingin menghapus data?')"
        href="hapus_barang.php?barang_id=<?php echo $barang['barang_id'] ?>">Hapus</a>
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