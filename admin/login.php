<?php
session_start();
require_once('../includes/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Submitted username: " . $username . "<br>";
    echo "Submitted password: " . $password . "<br>";

    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bindParam(1, $username, PDO::PARAM_STR);
    $stmt->execute();
    
    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        echo "Stored hashed password: " . $user['password'] . "<br>";

        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header("Location: project_list.php"); 
            exit();
        } else {
            
            header("Location: login_form.php?error=invalidpassword");
            exit();
        }
    } else {
        
        header("Location: login_form.php?error=nouser");
        exit();
    }
} else {
   
    header("Location: login_form.php?error=invalidrequest");
    exit();
}
?>
