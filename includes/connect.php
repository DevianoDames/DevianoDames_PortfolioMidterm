<?php
$dsn = "mysql:host=localhost;dbname=efduc938_portfolio;charset=utf8mb4";
try {
$connection = new PDO($dsn, 'efduc938_dev', 'DevianoDames2212!');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}
?>