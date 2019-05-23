<?php
    session_start();

    require ('connect.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $sql = "SELECT IDpersonal FROM `personalInformation` WHERE fname LIKE '$fname' AND lname LIKE '$lname'";

    $result = $conn->query($sql);
    $res = $result->fetch_assoc();

    //echo "<br>ID is " . $res['IDpersonal'] . "<br>";
    $_SESSION['ID'] = $res['IDpersonal'];

    include ('close.php');

    header('Location: ../subForms/incident.php');
?>