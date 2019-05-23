<?php
    session_start();
    $ID = $_SESSION['ID'];
    if (isset($ID)) {
        echo "<h1>ID IS " . $ID . "</h1>"; 
    }
    $_SESSION = array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/index.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Incident</title>
    <style>
        body {
            background-image: url("../images/space.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        h1, h3 {
            color: white;
        }
        
    </style>
</head>
<body>
    <h1>Incident Report</h1>
    <div id="incident">
        <form action="../php/incident.php" id="incidentReport" method="POST">

            
            <h3>When did it happen? <input type="date" name="date"></h3>

            <h3>What street did it happen on? <input type="text" name="street"></h3>
            <h3>What city did it occur in? <input type="text" name="city"></h3>
            <h3>What state did it occur in? <input type="text" name="state"></h3>
            <h3>Zip Code that incident occurred in: <input type="text" name="zip"></h3>
            <h3>What country did it occur in? <input type="text" name="country"></h3>

            <h3>Class Encounter: <select name="class" id="class"> <option value="1">Saw UFO</option> <option value="0">Saw Alien</option> </select> </h3>
            <h3>Threat Encounter: <select name="threat" id="threat"> <option value="1">Yes</option> <option value="0">No</option> </select> </h3>
            <h3>Alien Hostility? <select name="hostility" id="hostility"><option value="H">Hostile</option> <option value="N">Neutral</option> <option value="F">Friendly</option> <option value="X">Not Applicable</option></select> </h3>

            
            <h3>Corroborated? <select name="corroborate" id="corroborate"> <option value="1">Yes</option> <option value="0">No</option> </select></h3>
            <h3>Drugs? <select name="drugs" id="drugs"> <option value="1">Yes</option> <option value="0">No</option> </select></h3>

            <h3>ID: <input type="text" name="id"></h3>
            
           
        </form>
    </div>
    
    <button id="searchID">Forgot ID?</button>
    <input type="button" value="Click Me!" onclick="submitForm()" />
    <h1 id="test"></h1>
    
   <script>

       
        submitForm = function(){
            document.getElementById("incidentReport").submit();
        }

        
        document.getElementById('searchID').onclick = function () {
            location.href = "../subForms/forgotId.php";
        }
        
   </script>
</body>
</html>