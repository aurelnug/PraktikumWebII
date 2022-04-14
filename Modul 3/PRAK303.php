<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3 Soal 3</title>
</head>
<body>
    <form action="" method="post">
        Batas Bawah: <input type="number" name="bawah"><br>
        Batas Atas: <input type="number" name="atas"><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>

    <?php
        if (isset($_POST['cetak'])) {
            $bawah = $_POST['bawah'];
            $atas = $_POST['atas'];
            do {
                if (($bawah+7)%5==0) {
                    echo "<img src=\"star-images.png\" width=\"15\" height=\"15\"> </img>";
                } else {
                    echo "$bawah ";
                }
                $bawah++;
            } while ($bawah <= $atas);
        }
    ?>
</body>
</html>