<?php
    $server = "localhost";
    $db = "latihan";
    $user = "root";
    $pass = "";

    try {
        $koneksi = new PDO("mysql:host=$server;dbname=$db", "$user");
        $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $hasil = $koneksi->query('SELECT * FROM liga');
        while ($row = $hasil->fetch(PDO::FETCH_ASSOC)){
            echo "$row[kode] $row[negara] $row[champion]";
            echo "<br>";
        }
        $koneksi=null;

    } catch (PDOExpection $e) {
        echo "Connection Failed: ".$e->getMessage();
        die();
    }
?>