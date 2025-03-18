<?php
// Handle contact form and send email securely
if (isset($_POST['contact'])) {
    // Sanitize input to prevent XSS
    $fname   = htmlspecialchars(trim($_POST['fname']));
    $lname   = htmlspecialchars(trim($_POST['lname']));
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address.');</script>";
        exit;
    }

    // Validate required fields
    if (empty($fname) || empty($lname) || empty($email) || empty($message)) {
        echo "<script>alert('All fields are required.');</script>";
        exit;
    }

    // Prevent Email Header Injection (Remove newlines)
    $email = str_replace(["\r", "\n", "%0A", "%0D"], '', $email);
    $phone = str_replace(["\r", "\n", "%0A", "%0D"], '', $phone);

    // Recipient email
    $to = "your-email@example.com"; // Set your email here

    // Subject and formatted message
    $subject = "Contact Form Submission";   
    $body  = "Name: $fname $lname\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Message:\n$message";

    // Additional email headers
    $headers = "From: no-reply@yourwebsite.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email securely
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you for contacting us. We will get back to you soon.');</script>";
    } else {
        echo "<script>alert('Sorry, something went wrong. Please try again.');</script>";
    }
}
?>
