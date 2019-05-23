<?php

// $servername = "gator4268.hostgator.com";
// $dbUsername = "mmcclend_login";
// $dbPassword = "logintoor";
// $dbName = "mmcclend_phplogin";

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "toor";
$dbName = "loginsystemtut";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("All Connections failed: " . mysqli_connect_error());
}