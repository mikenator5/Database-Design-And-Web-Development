<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "A4phpvet";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Connection failed";
} echo "Connected Successfully";
 ?>
