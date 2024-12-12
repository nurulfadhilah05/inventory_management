<?php
include("../koneksi.php");

$penyedia_id = $_GET['penyedia_id'];

$query = $db->query("SELECT * FROM tb_penyedia WHERE penyedia_id = '$penyedia_id'");
$penyedia = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit Data Penyedia</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="penyedia_id" value="<?php echo $penyedia['penyedia_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Penyedia</td>
                <td>
                    <input type="text" name="nama"
                    value="<?php echo $penyedia['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td>
                    <input type="number" name="kontak"
                    value="<?php echo $penyedia['kontak']; ?>">
                </td>
            </tr>
            </table>
            <button type="submit" name="simpan">Simpan</button>
            </form>
    </body>        
</html>