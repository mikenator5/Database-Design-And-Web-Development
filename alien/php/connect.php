<?php
   
    $servername = "gator4268.hostgator.com";
    $username = "mmcclend_alien";
    $password = "alientoor";
    $dbname = "mmcclend_alien";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        $servername = "localhost";
        $username = "root";
        $password = "toor";
        $dbname = "alien";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("All Connections failed: " . $conn->connect_error);
        }
    }
    