<?php
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $userInput = $_POST['captcha'];

    // Get stored CAPTCHA text
    $captchaText = isset($_SESSION['captcha']) ? $_SESSION['captcha'] : '';

    // Check if the input matches the stored text
    if ($userInput === $captchaText) {
        echo 'CAPTCHA verification successful!';
        // You can proceed with your logic here
    } else {
        echo 'CAPTCHA verification failed. Please try again.';
        // Handle incorrect CAPTCHA entry
    }

    // Clear the CAPTCHA session
    unset($_SESSION['captcha']);
} else {
    echo 'Please submit the form to validate the CAPTCHA.';
}
?>
