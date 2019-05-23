<?php

    require ('connect.php');

    $vehicle = $_POST['vehicle'];
    $typeVehicle = $_POST['typeVehicle'];
    $harmed = $_POST['yesHarmed'];
    $enviro = $_POST['yesEnviro'];
    $alienTrace = $_POST['yesTrace'];
    $trace = $_POST['trace'];
    $color = $_POST['color'];
    $legs = $_POST['legs'];
    $animal = $_POST['animal'];
    $appendages = $_POST['appendages'];
    $size = $_POST['size'];
    $eyes = $_POST['eyes'];
    $abducted = $_POST['abducted'];
    $world = $_POST['world'];
    $time = $_POST['time'];
    $number = $_POST['number'];

    $anyElse = $_POST['anyElse'];
    $ID = $_POST['ID'];

    $sql = "INSERT INTO `classThreeReport` (`inVehicle`, `typeOfVehicle`, `personHarmDone`, `environmentHarmDone`, `physicalTrace`, `descriptionOfTrace`, `colorCreature`, `numLegsStandingOn`, `closestAnimal`, `otherAppendages`, `alienSize`, `numEyes`, `abducted`, `toOffWorld`, `timeGone`, `howManyCreatures`, `additionalDetails`, `IDreport`) VALUES (b'$vehicle', '$typeVehicle', b'$harmed', b'$enviro', b'$alienTrace', '$trace', '$color', '$legs', '$animal', '$appendages', '$size', '$eyes', b'$abducted', b'$world', '$time', '$number', '$anyElse', '$ID')";
      
    echo $sql;
    if ($conn->query($sql) === true) {
        echo "Created!";
    } else {
        echo $conn->error;
    }
    
    require ('close.php');
?>