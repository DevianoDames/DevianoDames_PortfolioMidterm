<?php
$dsn = "mysql:host=localhost;dbname=Deviano_Dames_portfolio;charset=utf8mb4";
try {
$connection = new PDO($dsn, 'root', 'root');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}
?>