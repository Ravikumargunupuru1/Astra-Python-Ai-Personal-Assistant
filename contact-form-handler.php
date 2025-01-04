<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate form fields
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Simple email sending
    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
} else {
    header("HTTP/1.1 404 Not Found");
    echo "404 Not Found";
}
?>
