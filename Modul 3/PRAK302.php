<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3 Soal 2</title>
</head>
<body>
    <form action="" method="post">
        Tinggi: <input type="number" name="tinggi"><br>
        Alamat Gambar: <input type="text" name="gambar">
        <input type="submit" value="Cetak">
    </form>

    <?php
        if (isset($_POST['tinggi']) && isset($_POST['gambar'])) {
            $tinggi = $_POST['tinggi'];
            $gambar = $_POST['gambar'];
            $i = 0;
            $j = 0;

            while ($i < $tinggi) {
                $i++;
                while ($j < $tinggi) {
                    $j++;
                    if ($i <= $j) {
                        echo "<img src='$gambar' width='25' height='25'></img>";
                    } else {
                        echo "<img src='putih.png' width='25' height='25'></img>";
                    }
                }
                echo "<br>";
                $j = 0;
            }
        }
    ?>
</body>
</html>