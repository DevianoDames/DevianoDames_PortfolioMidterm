<?php
require_once('../includes/connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pk'])) {
    $query = "UPDATE portfolio_items SET title = ?, image_url = ?, description = ? WHERE Id = ?";
    $stmt = $connection->prepare($query);

    $stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST['thumb'], PDO::PARAM_STR);
    $stmt->bindParam(3, $_POST['desc'], PDO::PARAM_STR);
    $stmt->bindParam(4, $_POST['pk'], PDO::PARAM_INT);

    if ($stmt->execute()) {
        // Redirect to project list after successful update
        header('Location: project_list.php');
        exit();
    } else {
        echo "Error updating project.";
    }
} else {
    // Redirect to project list if form is not submitted properly
    header('Location: project_list.php');
    exit();
}
?>
