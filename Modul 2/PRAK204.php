<!DOCTYPE html>
<head>
    <tittle></tittle>
</head>

<body>
    <form action=" " method="post">
        Nilai : <input type="number" name="angka"> <br>
        <button type="submit" name="submit"> Konversi </button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $angka = $_POST["angka"];
            if ($angka == 0) {
                echo "<h3> Hasil: Nol </h3>";
            } else if ($angka > 0 && $angka < 10) {
                echo "<h3> Hasil: Satuan </h3>";
            } else if ($angka == 10){
                echo "<h3> Hasil: Puluhan </h3>";
            } else if ($angka > 10 && $angka < 20) {
                echo "<h3> Hasil: Belasan </h3>";
            } else if ($angka >= 20 && $angka < 100) {
                echo "<h3> Hasil: Puluhan </h3>";
            } else if ($angka > 100 && $angka < 1000) {
                echo "<h3> Hasil: Ratusan </h3>";
            } else {
            echo "Anda menginput melebihi limit bilangan";
        }  
    }
    ?>
</body>
</html>