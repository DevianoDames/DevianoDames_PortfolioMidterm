<?php
require_once('../includes/connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // File upload logic here
    // Save the uploaded file and get the filename in $filename variable

    $query = "INSERT INTO portfolio_items (title, description, image_url) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($query);

    $stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST['desc'], PDO::PARAM_STR);
    $stmt->bindParam(3, $filename, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // Redirect to project list after successful insertion
        header('Location: project_list.php');
        exit();
    } else {
        echo "Error inserting project.";
    }
}
