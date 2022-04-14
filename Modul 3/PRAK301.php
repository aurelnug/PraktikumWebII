<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3 Soal 1</title>
</head>
<body>
    <form action="" method="post">
        Jumlah Peserta: <input type="number" name="peserta"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $peserta = $_POST['peserta'];
            $list = 1;

            while ($list <= $peserta) {
                if ($list%2==0) {
                    echo "<h1 style=\"color:green\">Peserta ke-$list</h1>";
                } else {
                    echo "<h1 style=\"color:red\">Peserta ke-$list</h1>";
                }
                $list++;
            }
        }
    ?>
</body>
</html>