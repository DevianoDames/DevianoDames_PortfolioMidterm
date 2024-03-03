<?php
session_start(); // Start a new session
require_once('connect.php');

// Create connection
$conn = new mysqli($servername, $username, $password, 'Deviano_Dames_portfolio');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Data from form
$user = $_POST['ddames'];
$pass = $_POST['password'];

// Prepare
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $user);

// Execute the prepared statement
$stmt->execute();
$result = $stmt->get_result();
if ($row = $result->fetch_assoc()) {
    // Verify hashed password
    if (password_verify($pass, $row['password'])) {
        // Successful login
        $_SESSION['user_id'] = $row['id']; // Store user ID in session
        // Redirect to the CMS page 'project_list.php'
        header('Location: project_list.php');
        exit();
    } else {
        // Invalid password
        echo "Invalid username or password";
    }
} else {
    // User not found
    echo "Invalid username or password";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
