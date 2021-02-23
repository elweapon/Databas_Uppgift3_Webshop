<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once("database.php");

    $name = htmlspecialchars(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
    $email = htmlspecialchars(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $message = htmlspecialchars(filter_var($_POST['message'], FILTER_SANITIZE_STRING));

    if (isset($name, $email, $message)) {
        if (strlen($name) < 50 && strlen($email) < 50) {
            if ($email === filter_var($email, FILTER_VALIDATE_EMAIL)) {

                //Prepare input
                $stmt = $conn->prepare("INSERT INTO contactform (name, email, message) VALUE (:name, :email, :message)");

                //Bind input
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':message', $message);

                //Execute and save
                $stmt->execute();

                $last_id = $conn->lastInsertId();
                $mess = "<div class='alert alert-success' role='alert'>
            <p>Hi, $name!
            </br>Your message is sent, a Unicorn will answer you ASAP.</p></div>";
            } else {
                $errEmail = "<div class='alert alert-danger' role='alert'>Your Email Adress is invalid, try again! </div>";
            }
        } else {
            $errMsg = "<div class='alert alert-danger' role='alert'>Your input is too long, max input Name &amp; email 50 characters.</div>";
        }
    } else {
        $errMsg = "<div class='alert alert-danger' role='alert'>You need to enter text in all fields</div>";
    }
}

?>