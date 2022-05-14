<?php
require('./model.php');
if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
</head>
<body>
    <h2 align="center">Data Member</h2>
    <a href="index.php"><button style='background-color:grey; border: none; color:white; border-radius: 5px; width: 65px; height: 20px'>Kembali</button></a>
    <a href="formMember.php"><button style='background-color:#8bc34a; border: none; color:white; border-radius: 5px; width: 100px; height: 20px'>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Nomor Member</th>
            <th>Alamat</th>
            <th>Tanggal daftar</th>
            <th>Tanggal bayar</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("member") ?>
    </table>
</body>
</html>