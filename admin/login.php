<?php
session_start();
require_once('../includes/connect.php'); // Ensure this path is correct to your database connection file

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // This is the plaintext password from the form

    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bindParam(1, $username, PDO::PARAM_STR);
    $stmt->execute();
    
    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verify the password against the hashed password in the database
        if (password_verify($password, $user['password'])) {
            // Password is correct, so start a new session
            $_SESSION['username'] = $user['username'];
            // Redirect the user to the project list page
            header("location: project_list.php");
            exit;
        } else {
            // Password is not valid, redirect back to the login page
            header("location: login_form.php");
            exit;
        }
    } else {
        // Username doesn't exist
        header("location: login_form.php");
        exit;
    }
} else {
    // The correct POST variables were not sent to this page
    header("location: login_form.php");
    exit;
}
?>
