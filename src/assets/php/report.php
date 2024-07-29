<?php
session_start();
header('Content-Type: application/json');

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['error' => 'User not logged in']);
    exit();
}

// Remote database connection details
$servername = "sql12.freesqldatabase.com";
$usernameDB = "sql12722639";
$passwordDB = "paN7mzzK8i"; 
$dbname = "sql12722639";
$port = 3306; 

// Create a connection
$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . $conn->connect_error]);
    exit();
}

// Get the period from the request
$period = isset($_GET['period']) ? $_GET['period'] : 'thisWeek';

// Get the user ID from the session
$user_id = $_SESSION['user_id'];

// Define the date range based on the period
switch ($period) {
    case 'today':
        $startDate = date('Y-m-d');
        $endDate = $startDate;
        break;
    case 'yesterday':
        $startDate = date('Y-m-d', strtotime('-1 day'));
        $endDate = $startDate;
        break;
    case 'thisWeek':
        $startDate = date('Y-m-d', strtotime('monday this week'));
        $endDate = date('Y-m-d', strtotime('sunday this week'));
        break;
    case 'lastWeek':
        $startDate = date('Y-m-d', strtotime('monday last week'));
        $endDate = date('Y-m-d', strtotime('sunday last week'));
        break;
    default:
        $startDate = date('Y-m-d');
        $endDate = $startDate;
        break;
}

// Prepare the SQL statement
$sql = "SELECT category, date, food_name, serving_size, calories FROM user_food_entries 
        WHERE date BETWEEN ? AND ? AND user_id = ?";

// Prepare and execute the query
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    echo json_encode(['success' => false, 'message' => 'Query preparation failed: ' . $conn->error]);
    $conn->close();
    exit();
}
$stmt->bind_param('ssi', $startDate, $endDate, $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Fetch all rows
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close connections
$stmt->close();
$conn->close();

// Output the data in JSON format
echo json_encode($data);
?>
