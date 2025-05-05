<?php

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form inputs
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'clemoh87@gmail.com';          // Your Gmail address
        $mail->Password   = 'yrvbzejigickcpbv';            // Your Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender and recipient settings
        $mail->setFrom($mail->Username, $name);
        $mail->addAddress($email); // Sends a copy to the sender — you might want to change this

        // Email content
        $mail->isHTML(false);
        $mail->Subject = "Contact Form: $subject";
        $mail->Body    = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

        // Send the email
        $mail->send();

        // Redirect after successful send
        header("Location: thankyou.php");
        exit();

    } catch (Exception $e) {
        echo "Sorry, your message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
