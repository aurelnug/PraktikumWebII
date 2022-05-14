<?php
require('./model.php');
if (isset($_GET['id_peminjaman'])) {
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman</title>
</head>
<body>
    <h2 align="center">Data Peminjaman</h2>
    <a href="index.php"><button style='background-color:grey; border: none; color:white; border-radius: 5px; width: 65px; height: 20px'>Kembali</button></a>
    <a href="formPeminjaman.php"><button style='background-color:#8bc34a; border: none; color:white; border-radius: 5px; width: 100px; height: 20px'>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("peminjaman") ?>
    </table>
</body>
</html>