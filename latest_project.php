<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/connect.php');
$stmt = $connection->prepare('SELECT * FROM portfolio_items ORDER BY title ASC');
$stmt->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/reset.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="js/SplitText.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/085f61f5df.js" crossorigin="anonymous"></script>
    <script defer src="js/main.js"></script>

    
    
</head>



<body>
<header class="header">
        <a href="#" class="logo">Deviano.</a>
        
        <i class="fa-solid fa-bars" id="ham-menu"></i>
        
        <nav class="navbar">
            <a href="index.html" class= "active">Home</a>
            <a href="index.html#about">About</a>
            <a href="index.html#services">Services</a>
            <a href="#">Projects</a>
            <a href="index.html#contact">Contact</a>
        </nav>

    </header>

    <section class="portfolio">
    <h2>Latest <span>Projects</h2>
    <div class="portfolio-container">
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="portfolio-box">';
            echo '<a href="project_casestudy.php?id=' . $row['Id'] . '">';
            echo '<img class="portfolio-image" src="images/' . $row['image_url'] . '" alt="Project Thumbnail">';
            echo '<div class="portfolio-cover">';
            echo '<p>' . $row['description'] . '</p>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
        }
        $stmt = null;

?> 
        ?>
        
    </div>
        






</body>
</html>