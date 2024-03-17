<?php
if(isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Recipient email
    $to = 'jyxsuman@gmail.com';

    // Email subject
    $subject = 'New message from '.$name;

    // Email content
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Headers
    $headers = "From: $email";

    // Send email
    if(mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send message. Please try again later.';
    }
}
?>
