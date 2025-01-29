<?php
// Include the PHPMailer library
require 'C:\Users\katha\OneDrive\Desktop\kathan\PHPMailer-master\src\Exception.php';
require 'C:\Users\katha\OneDrive\Desktop\kathan\PHPMailer-master\src\PHPMailer.php';
require 'C:\Users\katha\OneDrive\Desktop\kathan\PHPMailer-master\src\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Configure the PHPMailer instance
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'kathanp542@gmail.com';
$mail->Password = 'kathan2483'; // Consider using environment variables or a configuration file
$mail->setFrom($_POST['sender-email'], $_POST['sender-name']);
$mail->addAddress('kathanp542@gmail.com');
$mail->Subject = 'New Form Submission';
$mail->Body = $_POST['message'];

// Check if the email was sent successfully
try {
    $mail->send();
    echo 'Email sent successfully.';
} catch (Exception $e) {
    echo "There was an error sending the email. Mailer Error: {$mail->ErrorInfo}";
}
?>
