<?php
session_start(); // Start or resume the session


if(!isset($_SESSION['username'])){
    header('Location: login_form.php');
    exit;
}
require_once('../includes/connect.php');

//move_uploaded_file etc FIRST, as we need the new name
//save the name in $filename variable



$query = "INSERT INTO portfolio_items (title,description,image_url) VALUES (?,?,?)";

$stmt = $connection->prepare($query);
$stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['desc'], PDO::PARAM_STR);
$stmt->bindParam(3, $filename, PDO::PARAM_STR);

$stmt->execute();
$last_id = $connection->lastInsertId();
$stmt = null;
header('Location: project_list.php');
?>