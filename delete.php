<?php

require 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $sql = "DELETE FROM mahasiswa where id=?";

    $row = $koneksi->execute_query($sql, [$id]);

    if ($row) {
        header("Location: index.php");
    }
}

?>