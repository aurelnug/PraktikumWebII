<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3 Soal 5</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="text">
        <input type="submit" value="submit">
    </form>

    <?php
        if (isset($_POST['text'])) {
            $text = $_POST['text'];
            $i = 0;
            $j = 0;

            while ($i < strlen($text)) {
                while ($j < strlen($text)) {
                    if ($j == 0) {
                        echo strtoupper($text[$i]);
                    } else {
                        echo strtolower($text[$i]);
                    }
                    $j++;
                }
                $j = 0;
                $i++;
            }
        }
    ?>
</body>
</html>