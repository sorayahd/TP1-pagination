<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    try {
        $connection = new PDO("mysql:host=$hostname;dbname=pagination", $username, $password);
        
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "connexion échoué: " . $e->getMessage();
    }
?>