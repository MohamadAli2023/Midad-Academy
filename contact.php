<?php
session_start();

// Handle login/logout button
if (isset($_SESSION['id'])) {
    echo '<a href="logout.php" class="get-started-btn">LOGOUT</a>';
} else {
    echo '<a href="login.php" class="get-started-btn">Get Started</a>';
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Simple mail sending script (replace with your logic)
    $to = "info.midadacademy@gmail.com";
    $headers = "From: $email";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo '<p class="success">Message sent successfully!</p>';
    } else {
        echo '<p class="error">Failed to send the message. Please try again later.</p>';
    }
}
?>
