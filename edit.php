<?php

require 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $sql = "SELECT * FROM mahasiswa WHERE id=?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();

    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $id = $_GET['id'];

    $sql = "UPDATE mahasiswa SET nim=?, nama=?, jurusan=?, alamat=? WHERE id=?";
    $row = $koneksi->execute_query($sql, [$nim, $nama, $jurusan, $alamat, $id]);

    header("Location: index.php");
    exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>

    <h1>Edit Data Mahasiswa</h1>

    <form action="" method="POST">
        <label for="nim">NIM:</label><br>
        <input type="text" name="nim" value="<?= $row['nim'] ?>" required><br>

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br>

        <label for="jurusan">Jurusan:</label><br>
        <input type="text" name="jurusan" value="<?= $row['jurusan'] ?>" required><br>

        <label for="alamat">Alamat:</label><br>
        <textarea name="alamat" value="<?= $row['alamat'] ?>" required></textarea><br>

        <input type="submit" value="Simpan">
    </form>

    <a href="index.php">Kembali</a>
    
</body>
</html>