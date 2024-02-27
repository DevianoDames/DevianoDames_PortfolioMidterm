<?php
require_once('connect.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Data from form
$user = $_POST['username'];
$pass = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $user, $pass); // 'ss' specifies that both parameters are strings

// Execute the prepared statement
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Successful login
    echo "Logged in successfully";
    // Optional: Fetch the data if needed
    // while ($row = $result->fetch_assoc()) {
    //     // process your $row here if needed
    // }
} else {
    // Login failed
    echo "Invalid username or password";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
