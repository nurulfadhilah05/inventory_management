<?php
include("../koneksi.php");

$barang_id = $_GET['barang_id'];

$query = $db->query("SELECT * FROM tb_barang WHERE barang_id = '$barang_id'");
$barang = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit Data Barang</h3>
    <form action="../barang/proses_edit.php" method="POST">
        <input type="hidden" name="barang_id" value="<?php echo $barang['barang_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $barang['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>
                    <input type="number" name="stok" value="<?php echo $barang['stok']; ?>">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="number" name="harga" value="<?php echo $barang['harga']; ?>">
                </td>
            </tr>
            </table>
            <button type="submit" name="simpan">Simpan</button>
            </form>
    </body>        
</html>