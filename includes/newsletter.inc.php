<?php
// Handle newsletter subscription securely
if (isset($_POST['newsletter'])) {
    // Sanitize and validate email
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address.');</script>";
        exit;
    }

    // Prevent Email Header Injection (Remove newlines)
    $email = str_replace(["\r", "\n", "%0A", "%0D"], '', $email);

    // Recipient email (Update this!)
    $to = "your-email@example.com";

    // Subject and email body
    $subject = "Newsletter Subscription";
    $message = "New Newsletter Subscription:\nEmail: $email";

    // Email headers (Prevent spoofing)
    $headers = "From: no-reply@yourwebsite.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email securely
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Thank you for subscribing to our newsletter.');</script>";
    } else {
        echo "<script>alert('Sorry, something went wrong. Please try again.');</script>";
    }
}
?>
