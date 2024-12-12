<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
</head>
<body>
    <h3>Tambah Data Penyedia</h3>
    <form action="proses_tambah.php" method="POST">
    <table border="0"> 
        <tr>
          <td>Nama Penyedia</td>
          <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
          <td>kontak</td>
          <td><input type="number" name="kontak"></td>
        </tr>
    </table>
    <button type="submit" name="simpan" class="btn btn-primary">
    Simpan</button>
</form>
</body>
</html>