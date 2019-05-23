<?php

    require ('connect.php');

    $vehicle = $_POST['vehicle'];
    $typeVehicle = $_POST['typeVehicle'];
    $harmed = $_POST['yesHarmed'];
    $enviro = $_POST['yesEnviro'];
    $alienTrace = $_POST['yesTrace'];
    $trace = $_POST['trace'];

    $anyElse = $_POST['anyElse'];
    $ID = $_POST['ID'];

    $sql = "INSERT INTO `classTwoReport` (`inVehicle`, `typeOfVehicle`, `personHarmDone`, `environmentHarmDone`, `physicalTrace`, `descriptionOfTrace`, `additionalDetails`, `IDreport`) VALUES (b'$vehicle', '$typeVehicle', b'$harmed', b'$enviro', b'$alienTrace', '$trace', '$anyElse', '$ID')";
    echo $sql;
    if ($conn->query($sql) === true) {
        echo "Created!";
    } else {
        echo $conn->error;
    }
    
    require ('close.php');
?>