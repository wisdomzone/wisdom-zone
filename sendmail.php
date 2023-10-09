<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST['full-name'])
        && !empty($_POST['email'])
        && !empty($_POST['subject'])
        && !empty($_POST['message'])
    ) {
        $name = $_POST["full-name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];


        $to = "contact@wisdomzone.info";
        $body = "Name: {$name}\nEmail: {$email}\nMessage: {$message}";
        $headers = "From: {$email}";


        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}
