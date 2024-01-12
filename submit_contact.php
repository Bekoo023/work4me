<?php

ini_set("SMTP", "smtp-mail.outlook.com");
ini_set("smtp_port", "587");

ini_set("smtp_ssl", "tls");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "bekir12@live.nl"; // Replace with your email address

    // Set email subject
    $subject = "Contact Form Submission from $name";

    // Compose the email message
    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Message:\n$message";

    // Set headers
    $headers = "From: $email" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message_body, $headers)) {
        // Email sent successfully
        echo "Thank you for contacting us! Your message has been sent.";
    } else {
        // Error sending email
        echo "Oops! There was a problem sending your message. Please try again later.";
    }
} else {
    // Redirect to the contact page if accessed directly without a POST request
    header("Location: contact.html"); // Replace with the actual URL of your contact page
    exit;
}
?>
