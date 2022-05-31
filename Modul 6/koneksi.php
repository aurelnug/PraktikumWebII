<?php
    function koneksi()
    {
        try {
            $pdo_conn = new PDO(
                'mysql:host=localhost;dbname=perpustakaan_db','root','',
                array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
            );
        } catch (PDOException $th) {
            echo "Koneksi atau query bermasalah: " . $th->getMessage() . "<br>";
            die();
        }
        return $pdo_conn;
    }
?>