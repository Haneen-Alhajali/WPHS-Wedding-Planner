<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['contact_person']));
    $email = filter_var(trim($_POST['contact_email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['contact_phone']));
    $message = htmlspecialchars(trim($_POST['contact_message']));
    $appPassword = htmlspecialchars(trim($_POST['appPassword'])); // Add this field in the form

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "haneenradad2013@gmail.com";
        $subject = "New Contact Form Submission";

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = $email; // User's email address
            $mail->Password   = $appPassword; // User's Gmail app password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress($to);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = "<strong>Name:</strong> $name<br>
                              <strong>Email:</strong> $email<br>
                              <strong>Phone:</strong> $phone<br>
                              <strong>Message:</strong><br>$message";
            $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

            // Send email
            $mail->send();
            echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}'); window.location.href='contact.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid email address. Please provide a valid email.'); window.location.href='contact.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request method.'); window.location.href='contact.php';</script>";
}
?>
