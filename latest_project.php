<!DOCTYPE html>
<html lang="en">
<?php
require_once('connect.php');
$stmt = $connection->prepare('SELECT * FROM portfolio_items ORDER BY title ASC');
$stmt->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">

</head>



<body>
<header class="header">
        <a href="#" class="logo">Deviano.</a>
        
        <i class="fa-solid fa-bars" id="ham-menu"></i>
        
        <nav class="navbar">
            <a href="index.html" class= "active">Home</a>
            <a href="index.html#about">About</a>
            <a href="index.html#services">Services</a>
            <a href="#">Portfolio</a>
            <a href="index.html#contact">Contact</a>
        </nav>

    </header>

    <section class="portfolio">
    <h2>Latest Projects</h2>
    <div class="portfolio-container">
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="portfolio-box">';
            echo '<a href="project_detail.php?id=' . $row['id'] . '">';
            echo '<img src="images/' . $row['image_url'] . '" alt="Project Thumbnail">';
            echo '<div class="portfolio-cover">';
            echo '<h4>' . $row['title'] . '</h4>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<a href="project_detail.php?id=' . $row['id'] . '"><i class="fas fa-arrow-right"></i></a>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
        }



$stmt = null;

?> 


</body>
</html>
