<?php
header('Content-Type: application/json');

// Remote database connection details
$servername = "sql12.freesqldatabase.com";
$usernameDB = "sql12722639";
$passwordDB = "paN7mzzK8i"; 
$dbname = "sql12722639";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . $conn->connect_error]);
    exit();
}

// Ensure session is started
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

// Fetch RDI value for the logged-in user
$userId = $_SESSION['user_id'];
$sql = "SELECT rdi FROM rdi WHERE user_id = ? ORDER BY id DESC LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result) {
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode(['success' => true, 'rdi' => $row['rdi']]);
    } else {
        echo json_encode(['success' => false, 'message' => 'No RDI data found']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Query failed: ' . $conn->error]);
}

$stmt->close();
$conn->close();
?>
