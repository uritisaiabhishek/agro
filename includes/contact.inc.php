<?php
    // handle contact form and send email
    if (isset($_POST['contact'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $to = ""
        $subject = "Contact Form Submission";   
        $message = "Name: $fname $lname\nEmail: $email\nPhone: $phone\n\n$message";
        $headers = "From: $email";
        if (mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Thank you for contacting us. We will get back to you soon.')</script>";
        } else {
            echo "<script>alert('Sorry, something went wrong. Please try again.')</script>";
        }
    }
?>