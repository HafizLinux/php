<?php
    $host = "localhost";
    $dbname = "dbpos";
    $username = "root";
    $password = "";

    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Koneksi gagal: " . $e->getMessage();
    }
?>