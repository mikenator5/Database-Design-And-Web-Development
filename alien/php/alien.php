<?php
    require ('connect.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $birthday = $_POST['dateBirth'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $streetAddress = $_POST['streetAddress'];
    $city = $_POST['city'];
    $stateAddress = $_POST['stateAddress'];
    $zipCode = $_POST['zipCode'];
    $country = $_POST['country'];

    $birthdayNum = explode('-', $birthday);
    
    $sql = "INSERT INTO personalInformation(fname, lname, dayBirth, monthBirth, yearBirth, email, phone, streetAddress, city, stateAddress, zip, country) VALUES ('$fname', '$lname', '$birthdayNum[2]', '$birthdayNum[1]', '$birthdayNum[0]', '$email', '$phoneNumber', '$streetAddress', '$city', '$stateAddress', '$zipCode', '$country')";
    

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    require_once ('close.php');

    header('Location: ../subForms/incident.php');
    
?>
