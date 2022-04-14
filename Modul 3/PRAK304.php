<?php
    $jumlah = 0;
    if(isset($_POST['jumlah'])){
        $jumlah = $_POST['jumlah'];
    }

    if(isset($_POST['tambah'])){
        $jumlah++;
    }
    elseif(isset($_POST['kurang'])){
        $jumlah--;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3 Soal 4</title>
</head>
<body>
    <?php 
    if($jumlah==0): 
    ?> 

    <form action="" method="post">
        Jumlah Bintang 
        <input type="number" name="jumlah"> <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    endif;

    if($jumlah!=0): 
    echo "Jumlah bintang $jumlah <br><br>";
    for ($i=0; $i<$jumlah; $i++){
        echo "<img src=\"star-images.png\" width=\"70px\" height=\"70px\">";
    }
    ?>

    <form action="" method="post">
        <input type="hidden" name="jumlah" value="<?= $jumlah; ?>">
        <input type="submit" name="tambah" value="Tambah">
        <input type="submit" name="kurang" value="Kurang">
    </form>
    
    <?php
    endif;
    ?>
</body>
</html>