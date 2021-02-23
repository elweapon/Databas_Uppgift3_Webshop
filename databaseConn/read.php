<?php
require_once("database.php");

//Prepare command to be executed
$stmt = $conn->prepare("SELECT * FROM products");

//Execute command
$stmt->execute();

//Get all data
$result = $stmt->fetchAll();

