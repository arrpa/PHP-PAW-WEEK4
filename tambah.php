<?php

require 'config/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    
    <h1>Tambah Mahasiswa</h1>

    <form action="simpan.php" method="POST">
        <label for="nim">NIM:</label><br>
        <input type="text" name="nim" required><br>

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" required><br>

        <label for="jurusan">Jurusan:</label><br>
        <input type="text" name="jurusan" required><br>

        <label for="alamat">Alamat:</label><br>
        <textarea name="alamat" required></textarea><br>

        <input type="submit" value="Simpan">
    </form>

    <a href="index.php">Kembali</a>

</body>
</html>