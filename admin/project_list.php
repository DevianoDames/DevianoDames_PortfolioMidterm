<?php
session_start(); // Start or resume the session


if(!isset($_SESSION['username'])){
    header('Location: login_form.php');
    exit;
}

// Include database connection
require_once('../includes/connect.php');

// Fetch portfolio items from database
try {
    $stmt = $connection->prepare("SELECT id, title, description FROM portfolio_items ORDER BY created_at DESC");
    $stmt->execute();
    
    // Fetch all portfolio items
    $portfolioItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    // Handle exception
    $portfolioItems = [];
    // Optionally, log this error to a file or display a friendly error message
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project List</title>
    <link rel="stylesheet" href="../css/main.css"> <!-- Adjust the path as needed -->
</head>
<body>
    <h1>Project List</h1>
    <div class="project-list">
        <?php if (!empty($portfolioItems)): ?>
            <ul>
                <?php foreach ($portfolioItems as $item): ?>
                    <li>
                        <h2><?= htmlspecialchars($item['title']) ?></h2>
                        <p><?= htmlspecialchars($item['description']) ?></p>
                        <!-- You can add more details or an edit/delete link here -->
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
           
        <?php endif; ?>
    </div>
    <style>
      
    </style>

    <br><br><br>
    <!-- Add a New Project Form -->
    <style>
      <style>
        .project-list-container {
            margin: 20px;
            padding: 10px;
        }
        .project-list {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .project-list:hover {
            background: #34495e;
        }
        .project-list a {
            color: #18bc9c;
            margin-left: 10px;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .project-list a:hover {
            color: #2ecc71;
        }
        .contact {
            background: #323846;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            margin: 30px auto;
        }
        .input-box {
            margin-bottom: 15px;
        }
        .input-box input,
        .input-box textarea {
            width: 100%;
            padding: 10px;
            background: #1f242d;
            border: 1px solid #3d4752;
            color: #ecf0f1;
            border-radius: 4px;
        }
        .btn {
            background: #18bc9c;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            width: 100%;
            border: none;
        }
        .btn:hover {
            background: #16a085;
        }
    </style>
    </style>
   <!-- Add a New Project Form -->
<div class="contact">
    <form action="latest_project.php" method="post" class="form-styling" enctype="multipart/form-data">
        <div class="input-box">
            <label for="title">Project Title:</label>
            <input name="title" type="text" required>
        </div>
        <div class="input-box">
            <label for="thumb">Project Thumbnail:</label>
            <input name="thumb" type="text" required>
        </div>
        <div class="input-box">
            <label for="image">Project Image:</label>
            <input name="image" type="file" accept="image/*" required>
        </div>
        <div class="input-box">
            <label for="desc">Project Description:</label>
            <textarea name="desc" required></textarea>
        </div>
        <input name="submit" type="submit" value="Add" class="btn">
    </form>
</div>

</body>
</html>
