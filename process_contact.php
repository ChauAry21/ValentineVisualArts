<?php

// Collect form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';   

// Subject for the email
$subject = 'Message from Contact Form';

// Prepare email content
$emailContent = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

// Set up cURL to send POST request to webhook2mail
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://webhook.site/8eeab19c-e60c-4cb7-8308-1108f9cff143'); // Replace with your actual webhook URL
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'to' => 'valentinevisualarts@gmail.com', 
    'subject' => $subject,
    'text' => $emailContent
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request
$response = curl_exec($ch);

// Check if request was successful
if ($response === false) {
    echo "There was an error sending your message. Please try again later.";
} else {
    echo "Your message has been sent successfully.";
}

// Close cURL
curl_close($ch);

// Retrieve the raw POST data
$postData = file_get_contents('php://input');

// Parse the raw POST data as email message
$emailMessage = imap_rfc822_parse_headers($postData);

// Access the email subject if it exists
$subject = isset($emailMessage->subject) ? $emailMessage->subject : 'No Subject';

// Process the email
// For example, you can log the subject:
// error_log($subject);

// Send response
echo 'OK';

?>
