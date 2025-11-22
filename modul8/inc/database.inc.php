<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'prosjekt_db');
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME; // Driver settes her

    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
    } catch (PDOException $e) {
        echo "Feil ved tilkobling: " . $e->getMessage(); // Aldri gjør dette i produksjon/innlevering!
    }
?>