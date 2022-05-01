<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4 Soal 1</title>
</head>
<body>
    <form action="" method="post">
        Panjang: <input type="number" name="panjang"><br>
        Lebar: <input type="number" name="lebar"><br>
        Nilai: <input type="text" name="nilai"><br>
        <input type="submit" name="cetak" value="cetak">
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilai = $_POST['nilai'];

        $matriks = $panjang*$lebar;

        $nilai = explode(" ", $nilai);
        if (count($nilai)==$matriks) {
            $new = array_chunk($nilai, $lebar);

            echo "<table border=1 cellspacing=0>";
            for ($i=0; $i<$panjang; $i++) { 
                echo"<tr>";
                for ($j=0; $j<$lebar; $j++) { 
                    echo "<td width=40 height=40 align=center>" . $new[$i][$j] . "</td>";
                }
                echo"</tr>";
            }
            echo"</table>";
        }
        else {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
    ?>
</body>
</html>