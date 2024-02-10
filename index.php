<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/connect.php');
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

<?php

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

  echo  '<section class="project-con"><h3>'.$row['title'].'</h3><a href="project_detail.php?id='.
$row['project_id'].
'"><img class="thumbnail" src="images/'.    
        $row['image_url'].   
        '" alt="Project Thumbnail"></a><p>'.   
        $row['description'].  
        '</p></section>';

}

$stmt = null;

?> 


</body>
</html>
