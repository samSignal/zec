<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'mail.damzec.co.zw';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@damzec.co.zw';  // Your email
        $mail->Password   = 'info@Damzec'; // Replace with actual password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('info@damzec.co.zw', 'Enquiry From Damzec Website');
        $mail->addAddress('info@damzec.co.zw'); // Where you want to receive messages

        // Content
        $mail->isHTML(true);
        $mail->Subject = htmlspecialchars($subject);
        $mail->Body    = "
            <h3>New Contact Form Submission</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->send();
        // Replace the echo with a JSON response
        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
        exit;
    } catch (Exception $e) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo]);
        exit;
    }
}
?>
