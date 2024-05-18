<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    // Set up SMTP configuration for Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'desaiom014@gmail.com';
    $mail->Password = 'xulu laav pmvw yqyc';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Set the "from" and "to" addresses
    $mail->setFrom('desaiom014@gmail.com');
    $mail->addAddress($_POST["email"]);

    // Email to user
    $mail->isHTML(true);
    $mail->Subject = 'Thank you for contacting us';
    $mail->Body = 'Thank you for contacting us. We will get back to you soon.';
    $mail->send();

    // Email to website owner
    $mail->clearAddresses(); // Clear the recipient list
    $mail->addAddress('desaiom014@gmail.com'); // Replace with the owner's email address
    $mail->Subject = 'New contact form submission';
    $message = 'You have a new contact form submission from: ' . $_POST["name"] . '<br>';
    $message .= 'Email: ' . $_POST["email"] . '<br>';
    $message .= 'Message: ' . $_POST["message"];
    $mail->Body = $message;

    // Send the email to the owner
    $mail->send();

    echo "
    <script>
    alert('Mail sent successfully');
    document.location.href='index.php';
    </script>
    ";
}
