<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Unset all session variables
$_SESSION = array();

// Delete the session cookie (if exists)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Return a response indicating success
echo json_encode(['message' => 'Logged out successfully']);
?>
