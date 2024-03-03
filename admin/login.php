<?php
require_once('../includes/connect.php'); // Adjust the path as necessary.

$username = "ddames"; // Replace with the desired username.
$password = vanodames2212!("mypassword", PASSWORD_DEFAULT); // Replace with the desired password.

$stmt = $connection->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "User created successfully.";
} else {
    echo "Error: " . $connection->error;
}

$stmt->close();
$connection->close();
?>
