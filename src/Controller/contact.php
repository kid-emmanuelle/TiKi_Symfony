<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // SMTP Configuration
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@example.com';
        $mail->Password = 'your_password';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Collect form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Set up email parameters
        $to = "williamsvivian@gmail.com"; // Replace with your email address
        $emailSubject = "New Message from $name: $subject";
        $emailBody = "Name: $name\nEmail: $email\n\n$message";

        // Email content
        $mail->setFrom('your_email@example.com', 'Your Name');
        $mail->addAddress($to);
        $mail->Subject = $emailSubject;
        $mail->Body = $emailBody;

        // Send email
        $mail->send();

        // Email sent successfully
        echo json_encode(array('status' => 'success', 'message' => 'Your message has been sent. Thank you!'));
    } catch (Exception $e) {
        // Failed to send email
        echo json_encode(array('status' => 'error', 'message' => 'Failed to send message. Please try again later.'));
    }
} else {
    // Handle invalid request method
    http_response_code(405); // Method Not Allowed
    echo json_encode(array('status' => 'error', 'message' => 'Method not allowed.'));
}


