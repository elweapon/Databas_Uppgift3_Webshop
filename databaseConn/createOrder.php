<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once("databaseConn/database.php");

    $customerName = htmlspecialchars(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
    $phone = htmlspecialchars(filter_var($_POST['phone'], FILTER_SANITIZE_STRING));
    $email = htmlspecialchars(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $adress = htmlspecialchars(filter_var($_POST['adress'], FILTER_SANITIZE_STRING));
    $id = htmlspecialchars($_POST['productID']);

    // if (isset($name, $email, $phone)) {
    //     if (strlen($name) < 50 && strlen($email) < 50 && is_numeric($phone)) {
    //         if ($email === filter_var($email, FILTER_VALIDATE_EMAIL)) {

                try {
                    $stmt = $conn->prepare("INSERT INTO customer (customerName, email, phone, adress) VALUE (:customerName, :email, :phone, :adress)");

                    //Bind input
                    $stmt->bindParam(':customerName', $customerName);
                    $stmt->bindParam(':phone', $phone);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':adress', $adress);

                    //Execute and save
                    $stmt->execute();
                } catch (Exception $th) {
                    $duplicate = "User exist";
                }

                //Customer and ProductID


                $stmt = $conn->prepare("SELECT ID FROM customer WHERE email = '$email'");
                $stmt->execute();
                $customer = $stmt->fetch();
                $customerID = $customer[0];


                $stmt = $conn->prepare("SELECT ID FROM products WHERE ID = '$id'");
                $stmt->execute();
                $id = $stmt->fetch();
                $productID = $id[0];


                $stmt = $conn->prepare("INSERT INTO orders (customerID, productID) VALUE (:customerID, :productID)");

                //Bind input
                $stmt->bindParam(':customerID', $customerID);
                $stmt->bindParam(':productID', $productID);

                //Execute and save
                $stmt->execute();
                $lastorder = $conn->lastInsertId();
            }
//         } else {
//             $errEmail = "<div class='alert alert-danger' role='alert'>Your Email Adress is invalid, try again! </div>";
//         }
//     } else {
//         $errMsg = "<div class='alert alert-danger' role='alert'>Your input is too long, max input Name &amp; email 50 characters.</div>";
//     }
// } else {
//     $errMsg = "<div class='alert alert-danger' role='alert'>You need to enter text in all fields</div>";
// }
