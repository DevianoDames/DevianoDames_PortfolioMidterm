<?php
session_start(); 

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login_form.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Main Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="js/SplitText.js"></script>
    <script src="https://kit.fontawesome.com/085f61f5df.js" crossorigin="anonymous"></script>
    <script defer src="../js/main.js"></script>
    
</head>
<body>
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

    <div class="project-list-container">
        <?php
        require_once('../includes/connect.php');
        $stmt = $connection->prepare('SELECT id, title FROM portfolio_items ORDER BY title ASC');
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<p class="project-list">' . $row['title'] .
            '<a href="edit_project_form.php?id=' . $row['id'] . '">edit</a>' .
            '<a href="delete_project.php?id=' . $row['id'] . '">delete</a></p>';
        }
        $stmt = null;
        ?>
    </div>
    <br><br><br>
    <!-- Add a New Project Form -->
    <div class="contact">
      <form action="add_project.php" method="post" class="form-styling">
        <div class="input-box">
          <label for="title">Project Title:</label>
          <input name="title" type="text" required>
        </div>
        <div class="input-box">
          <label for="thumb">Project Thumbnail:</label>
          <input name="thumb" type="text" required>
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
