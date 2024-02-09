<?php
require_once('../includes/connect.php');
$query = 'DELETE FROM portfolio_items WHERE portfolio_items.id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$stmt = null;
header('Location: project_list.php');
?>