<?php
session_start(); 

// Redirect to login if the user is not logged in
if(!isset($_SESSION['username'])){
    header('Location: login_form.php');
    exit; // Make sure no further code is executed
}

require_once('../includes/connect.php');
$stmt = $connection->prepare('SELECT id, title FROM portfolio_items ORDER BY title ASC');
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Project Page</title>
<link rel="stylesheet" href="../css/main.css" type="text/css">
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script defer src="js/SplitText.js"></script>
<script src="https://kit.fontawesome.com/085f61f5df.js" crossorigin="anonymous"></script>
<script defer src="../js/main.js"></script>
</head>
<body>
    <div class="project-list-container">
        <!-- Your project list display code goes here -->
    </div>
    <!-- Add a New Project Form -->
    <div class="contact">
      <form action="add_project.php" method="post" class="form-styling">
        <!-- Form fields for adding a project -->
      </form>
    </div>
</body>
</html>
