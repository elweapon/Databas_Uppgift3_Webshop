<?php
require_once("database.php");

//Prepare command to be executed
$stmt = $conn->prepare("SELECT * FROM contactform");

//Execute command
$stmt->execute();

//Get all data
$contactResult = $stmt->fetchAll();

