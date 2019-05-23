<?php
    session_start();

    require ('connect.php');

    $vehicle = $_POST['vehicle'];
    $typeVehicle = $_POST['typeVehicle'];
    $anyElse = $_POST['anyElse'];
    $ID = $_POST['ID'];

    $sql = "INSERT INTO `classOneReport` (`inVehicle`, `typeOfVehicle`, `additionalDetails`, `IDreport`) VALUES (b'$vehicle', '$typeVehicle', '$anyElse', '$ID')";

    $conn->query($sql);
    
    require ('close.php');
?>