<?php
    require ('connect.php');
    
    $date = $_POST['date'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $class = $_POST['class'];
    $threat = $_POST['threat'];
    $corrob = $_POST['corroborate'];
    $drugs = $_POST['drugs'];
    $id = $_POST['id'];

    $dateOccur = explode('-', $date);


    $sql = "INSERT INTO `incidentReport` (`dayOccur`, `monthOccur`, `yearOccur`, `streetOccur`, `cityOccur`, `stateOccur`, `zipOccur`, `countryOccur`, `classEncounter`, `threatEncounter`, `corroborated`, `usingPsychedelics`, `IDpersonal`) 
    VALUES ('$dateOccur[2]', '$dateOccur[1]', '$dateOccur[0]', '$street', '$city', '$state', '$zip', '$country', '$class', '$threat', $corrob, $drugs, '$id')";


    if ($conn->query($sql) === TRUE) {
        //echo "Created!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    require ('close.php');

    header('Location: ../subForms/classFormIndex.php');
?>