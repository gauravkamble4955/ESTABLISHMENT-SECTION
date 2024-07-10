<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aadityakolhapure28@gmail.com';
    $mail->Password = 'rsyiovsdcybbxmjy';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Sender and recipient settings
    $mail->setFrom('your_email@gmail.com', 'Your Name');

    // Content settings
    $mail->isHTML(true);

    // Return the PHPMailer instance
    return $mail;
} catch (Exception $e) {
    echo 'Mailer Error: ' . $e->getMessage();
}