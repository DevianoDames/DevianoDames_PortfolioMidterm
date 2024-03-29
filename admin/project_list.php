<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project List</title>
    <link rel="stylesheet" href="../css/main.css"> <!-- Adjust the path as needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .add-project {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .add-project h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .add-project label {
            display: block;
            margin-bottom: 5px;
        }

        .add-project input[type="text"],
        .add-project textarea,
        .add-project input[type="file"],
        .add-project input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .add-project input[type="submit"] {
            background-color: #18bc9c;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .add-project input[type="submit"]:hover {
            background-color: #15a589;
        }

        .btn {
            text-align: center;
            margin-top: 20px;
        }

        .btn a {
            color: #18bc9c;
            text-decoration: none;
            font-weight: bold;
        }

        .btn a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<?php
session_start(); // Start or resume the session

if (!$_SESSION['username']) {
    header('Location: login_form.php');
    exit();
}

require_once('../includes/connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // File upload handling if needed
    $filename = ''; // Placeholder, replace with actual file handling logic

    $query = "INSERT INTO portfolio_items (title, description, image_url) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($query);

    if ($stmt) {
        $stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
        $stmt->bindParam(2, $_POST['desc'], PDO::PARAM_STR);
        $stmt->bindParam(3, $filename, PDO::PARAM_STR); // If uploading files, replace $filename with the actual filename

        try {
            if ($stmt->execute()) {
                // Redirect to project list after successful insertion
                header('Location: project_list.php');
                exit();
            } else {
                $error_message = "Error executing SQL query.";
            }
        } catch (PDOException $e) {
            $error_message = "Error adding project: " . $e->getMessage();
        }
    } else {
        $error_message = "Error preparing SQL statement.";
    }
}

// Display any error messages
if (isset($error_message)) {
    echo '<div style="color: red;">' . $error_message . '</div>';
}
?>
    <div class="container">
        <h1>Project List</h1>

        <!-- Add Project Form -->
        <div class="add-project">
            <h2>Add New Project</h2>
            <?php if (isset($error_message)) : ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <form action="project_list.php" method="post" enctype="multipart/form-data">
                <label for="title">Project Title:</label>
                <input type="text" name="title" required><br>
                <label for="desc">Project Description:</label>
                <textarea name="desc" required></textarea><br>
                <label for="image">Project Image:</label>
                <input type="file" name="image" accept="image/*" required><br>
                <input type="submit" name="submit" value="Add Project">
            </form>
        </div>

        <div class="btn">
            <a href="logout.php">Log Out</a>
        </div>
    </div>
</body>
</html>
