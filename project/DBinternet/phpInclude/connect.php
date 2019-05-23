<?php
   
    /*
    $servername = "gator4268.hostgator.com";
    $username = "mmcclend_a4root";
    $password = "a4toor";
    $dbname = "mmcclend_a4";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    */
    
    $servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "a4";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("All Connections failed: " . $conn->connect_error);
    }