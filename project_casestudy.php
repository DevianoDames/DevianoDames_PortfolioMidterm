<!DOCTYPE html>
<?php
require_once('includes/connect.php');
$query = 'SELECT GROUP_CONCAT(image_filename) AS images, description, title, overview, problems FROM portfolio_items, media WHERE portfolio_items.id = project_id AND portfolio_items.id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$images = explode(",", $row['images']);
$stmt = null;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['title']; ?></title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="js/SplitText.js"></script>
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
            <a href="#">Project</a>
            <a href="index.html#contact">Contact</a>
        </nav>

    </header>
    <br><br><br><br><br>

<section class="case-study-content">
        <h2>Project <span>Case Study</span></h2>
        <div class="project-info">

<h1><?php echo $row['title']; ?></h1>

<p><?php echo $row['description']; ?></p>

<div class="project-info2">
<h2>Overview</h2>
<p><?php echo $row['overview']; ?></p>
</div>

<div class="project-info2">
<h2>Problems and Solutions</h2>
<p class="probs"><?php echo $row['problems']; ?></p>
</div>
</div>

</section>

<section class="project-gallery">
<?php 
for($i =0; $i < count($images); $i++) {

echo '<img class="portfolio-image" src="images/'.$images[$i].'" alt="Project Image">';

}
?>
</section>

</body>
</html>