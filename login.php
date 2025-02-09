<?php
// Define valid credentials (replace with your actual username and password)
$valid_username = 'Bhuavnesh';
$valid_password = '2300030097';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the entered credentials match the valid credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Redirect to the main page upon successful login
        header('Location: main-page.html'); // Replace 'main-page.html' with your actual main page URL
        exit();
    } else {
        // Redirect back to the login page with an error message
        header('Location: login.html?error=1'); // You can handle the error in your login page
        exit();
    }
}
?>
