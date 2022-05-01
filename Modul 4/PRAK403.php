<?php
    $nilai = [
        ["no" => 1, "nama" => "Ridho",
        "mk" => [
           ["matkul" => "Pemrograman I", "sks" => 2], 
           ["matkul" => "Praktikum Pemrograman I", "sks" => 1],
           ["matkul" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
           ["matkul" => "Arsitektur Komputer", "sks" => 3],
        ]
        ],

        ["no" => 2, "nama" => "Ratna",
        "mk" => [
           ["matkul" => "Basis Data I", "sks" => 2], 
           ["matkul" => "Praktikum Basis Data 1", "sks" => 1],
           ["matkul" => "Kalkulus", "sks" => 3],
        ]
        ],

        ["no" =>3, "nama" => "Tono",
        "mk" => [
           ["matkul" => "Rekayasa Perangkat Lunak", "sks" => 3], 
           ["matkul" => "Analisis Perancangan Sistem", "sks" => 3],
           ["matkul" => "Komputasi Awan", "sks" => 3],
           ["matkul" => "Kecerdasan Bisnis", "sks" => 3],
        ]
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4 Soal 3</title>
</head>
    <style>
        table{
            border: 1px solid black;
        }
        tr, td, th{
            border: 1px solid black;
            padding: 8px;
        }
        .merah{
            background-color: red;
        }
        .hijau{
            background-color: green;
        }
        .bgcolor{
            background-color: lightgrey;
        }
        .bold{
            font-weight:bold;
        }
    </style>
<body>
    <table>
        <tr class="bgcolor && bold}">
            <td>No</td>
            <td>Nama</td>
            <td>Mata Kuliah diambil</td>
            <td>SKS</td>
            <td>Total SKS</td>
            <td>keterangan</td>
        </tr>
        <?php
            for ($i=0; $i<count($nilai); $i++) { 
                $jumlah = 0;
                for ($j=0; $j<count($nilai[$i]["mk"]); $j++) { 
                    $jumlah += $nilai[$i]["mk"][$j]["sks"];
                }
                $nilai[$i]["jumlah"] = $jumlah;
                if ($nilai[$i]['jumlah'] <= 6) {
                    $nilai[$i]["keterangan"] = "<td class='merah'>Revisi KRS</td>";
                } else {
                    $nilai[$i]["keterangan"] = "<td class='hijau'>Tidak Revisi</td>";
                }
            }

            for ($i=0; $i<count($nilai) ; $i++) { 
                for ($j=0; $j<count($nilai[$i]["mk"]); $j++) { 
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td>".$nilai[$i]["no"]."</td>";
                        echo "<td>".$nilai[$i]["nama"]."</td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["matkul"]."</td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["sks"]."</td>";
                        echo "<td>".$nilai[$i]["jumlah"]."</td>";
                        echo $nilai[$i]["keterangan"];
                    }else{
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["matkul"]."</td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>