<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $to = "simonwittum@gmx.de"; // Your email address
    $subject = "New Email Subscription";
    $email = $_POST['email'];
    $message = "You've subscribed with the email: " . $email;

    // Use appropriate headers
    $headers = "From: " . $to . "\r\n" .
        "Reply-To: " . $to . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
