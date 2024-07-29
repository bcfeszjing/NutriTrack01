<?php
session_start();

header('Content-Type: application/json');

// Remote database connection details
$servername = "sql12.freesqldatabase.com";
$usernameDB = "sql12722639";
$passwordDB = "paN7mzzK8i"; 
$dbname = "sql12722639";
$port = 3306; 

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $field = $data['field'];
    $value = $data['value'];
    $userId = $_SESSION['user_id'];

    if ($field === 'password') {
        $value = password_hash($value, PASSWORD_BCRYPT);
    }

    $stmt = $conn->prepare("UPDATE users SET $field = ? WHERE id = ?");
    $stmt->bind_param("si", $value, $userId);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
        // Update the session with new password length and original password if password is changed
        if ($field === 'password') {
            $_SESSION['password_length'] = strlen($data['value']);
            $_SESSION['original_password'] = $data['value'];
        }
    } else {
        echo json_encode(['error' => 'Failed to update user data.']);
    }

    $stmt->close();
}

$conn->close();
?>
