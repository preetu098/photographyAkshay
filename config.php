<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'photography';
$connection = mysqli_connect($server, $user, $password, $db);
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>