<?php
require_once('../includes/connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pk'])) {
    $query = "DELETE FROM portfolio_items WHERE Id = ?";
    $stmt = $connection->prepare($query);

    $stmt->bindParam(1, $_POST['pk'], PDO::PARAM_INT);

    if ($stmt->execute()) {
        // Redirect to project list after successful deletion
        header('Location: project_list.php');
        exit();
    } else {
        echo "Error deleting project.";
    }
} else {
    // Redirect to project list if form is not submitted properly
    header('Location: project_list.php');
    exit();
}
?>
