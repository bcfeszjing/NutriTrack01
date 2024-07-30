<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['error' => 'User not logged in']);
    exit();
}

$servername = "sql12.freesqldatabase.com";
$usernameDB = "sql12722639";
$passwordDB = "paN7mzzK8i"; 
$dbname = "sql12722639";
$port = 3306; 

$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname, $port);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

$user_id = $_SESSION['user_id'];
$date = $_GET['date'];

$sql = "SELECT * FROM user_food_entries WHERE user_id = ? AND date = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $user_id, $date);
$stmt->execute();

$result = $stmt->get_result();
$savedFoods = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($savedFoods);

$stmt->close();
$conn->close();
?>
