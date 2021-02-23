<?php

$dbServer = "localhost";
$dbName = "storedb";
$dbUser = "root";
$dbPass = "root";
$dbDSN = "mysql:dbname=$dbName;host=$dbServer";

try {
    $conn = new PDO($dbDSN, $dbUser, $dbPass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    echo "<p>Conection Failed</p>" . $e->getMessage();
    exit(1);
}
