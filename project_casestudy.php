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
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .case-study-content {
            padding: 50px;
            
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .case-study-content h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #fff;
        }

        .case-study-content p {
            font-size: 28px;
            line-height: 1.5;
            color: #fff;
        }

        .project-info2 h2 {
            font-size: 35px;
            margin-bottom: 10px;
            color: #fff;
        }

        .project-info2 p {
            font-size: 28px;
            line-height: 1.5;
            color: #fff;
        }

        .project-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
        }

        .portfolio-image {
    width: 50%;
    height: auto;
    border-radius: 10px;
    margin: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

        .portfolio-image:hover {
            transform: scale(1.05);
        }
        /* Case Study Section */

.overview-section {
  padding: 20px;
  border-radius: 5px;
  margin-top: 20px;
  margin-bottom: 50px;
}

.overview-section h2 {
  font-size: 35px;
}

.overview-section p {
  font-size: 28px;
  
}
        
    </style>
   

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
<div class="overview-section">
<h2><span>Overview</h2>
<p><?php echo $row['overview']; ?></p>
</div>
</div>

<div class="project-info2">
<h2>Problems and <span>Solutions</h2>
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
<button onclick="goToLatestProject()" style="position: fixed; bottom: 20px; right: 20px;"><span>Back</button>

<script>
    // JavaScript function to redirect to latest project page
    function goToLatestProject() {
        window.location.href = "latest_project.php"; // Change "latest_project.php" to the URL of your latest project page
    }
</script>


</body>
</html>