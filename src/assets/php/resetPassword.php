<?php
// resetPassword.php

session_start();
require 'vendor/autoload.php';

// Remote database connection details
$servername = "sql12.freesqldatabase.com";
$usernameDB = "sql12722639";
$passwordDB = "paN7mzzK8i"; 
$dbname = "sql12722639";
$port = 3306; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle GET request for token validation
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['token'])) {
    $token = $conn->real_escape_string($_GET['token']);

    // Validate the token
    $stmt = $conn->prepare("SELECT * FROM users WHERE reset_token = ? AND reset_token_expires > NOW()");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Token is valid, redirect to the reset password form with token
        header("Location: ../html/resetPassword.html?token=" . urlencode($token));
        exit();
    } else {
        echo "Invalid or expired token.";
    }
}

// Handle POST request for password update
elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']) && isset($_POST['new_password'])) {
    $token = $conn->real_escape_string($_POST['token']);
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);

    // Update password in the database
    $stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_token_expires = NULL WHERE reset_token = ?");
    $stmt->bind_param("ss", $new_password, $token);

    if ($stmt->execute()) {
        // Password updated successfully, redirect with success message
        header("Location: ../html/resetPassword.html?message=" . urlencode("Password has been reset successfully."));
        exit();
    } else {
        // Error updating password, redirect with error message
        header("Location: ../html/resetPassword.html?message=" . urlencode("Error updating password: " . $stmt->error));
        exit();
    }
}

// Close connection
$conn->close();
?>
