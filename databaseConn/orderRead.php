<?php
require_once("database.php");

//Prepare command to be executed
$stmt = $conn->prepare(

    "SELECT orders.orderID, customer.*, products.*
    FROM ((orders
    JOIN customer ON orders.customerID = customer.ID)
    JOIN products ON orders.productID = products.ID)"

);

//Execute command
$stmt->execute();

//Get all data
$orderResult = $stmt->fetchAll();
