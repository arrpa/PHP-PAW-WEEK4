<?php

require 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO mahasiswa (nim, nama, jurusan, alamat) VALUES (?,?,?,?)";

    $row = $koneksi->execute_query($sql, [$nim, $nama, $jurusan, $alamat]);

    header("Location: index.php");
    exit;
}

?>