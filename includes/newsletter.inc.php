<?php
    // handle newsletter form and send email
    if (isset($_POST['newsletter'])) {
        $email = $_POST['email'];
        $to = ""
        $subject = "Newsletter Subscription";
        $message = "Email: $email";
        $headers = "From: $email";
        if (mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Thank you for subscribing to our newsletter.')</script>";
        } else {
            echo "<script>alert('Sorry, something went wrong. Please try again.')</script>";
        }   
    }

?>