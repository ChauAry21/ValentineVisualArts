<?php

// Collect form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Recipient email address
$to = 'valentinevisualarts@gmail.com';

// Email subject
$subject = 'Message from Contact Form';

// Construct email headers
$headers = "From: $name <$email>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

// Construct email message
$emailMessage = "Name: $name\nEmail: $email\nMessage:\n$message";

// Send the email
if (mail($to, $subject, $emailMessage, $headers)) {
    echo 'Your message has been sent successfully.';
} else {
    echo 'There was an error sending your message. Please try again later.';
}
?>
