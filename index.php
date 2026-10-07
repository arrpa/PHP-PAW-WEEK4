<?php

    require_once "config/database.php";

    $result = $koneksi -> query("SELECT * FROM mahasiswa ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
</head>
<body>
    
    <h1>DATA MAHASISWA</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="1o">
        <tr>
            <th>ID</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 0; while ($row = $result->fetch_assoc()): ?>
    
        <tr>
            <td><?= ++$no ?></td>
            <td><?= htmlspecialchars($row['nim']) ?></td>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['jurusan']) ?></td>
            <td><?= htmlspecialchars($row['alamat']) ?></td>
    
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a>/</a>
                <a href="delete.php?id=<?= $row['id'] ?>"
                onclick="return confirm ('Yakin mau di hapus?')">Hapus</a>
            </td>
        </tr>
    
        <?php endwhile; ?>
    </table>


</body>
</html>