<?php
session_start(); // Start or resume the session


if(!isset($_SESSION['username'])){
    header('Location: login_form.php');
    exit;
}
require_once('../includes/connect.php');
$query = 'DELETE FROM portfolio_items WHERE portfolio_items.id = :portfolio_items';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':portfolio_items', $projectId, PDO::PARAM_INT);
$stmt->execute();
$stmt = null;
header('Location: project_list.php');
?>