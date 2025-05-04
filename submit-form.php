<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo('Inside');
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));git
    $message = htmlspecialchars(trim($_POST["message"]));

    $mail = new PHPMailer(true);

    try {
        echo('Inside');
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'clemoh87@gmail.com';          // Replace with your Gmail
        $mail->Password   = 'yrvbzejigickcpbv';            // Replace with your Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender & recipient
        $mail->setFrom($mail->Username, $name);
        $mail->addAddress($email);           // Where the message is sent

        // Email content
        $mail->isHTML(false);
        $mail->Subject = "Contact Form: $subject";
        $mail->Body    = "Name: $name
Email: $email
Subject: $subject

Message:
$message";

        $mail->send();
        header("Location: thankyou.php");
        exit();

    } catch (Exception $e) {
        echo "Sorry, your message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>