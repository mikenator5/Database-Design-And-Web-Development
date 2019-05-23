<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class One Report</title>
    <style>
        body {
            background-image: url("../images/space.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        h1, h3 {
            color: white;
        }

        button {
            margin: 10px;
            padding: 5px;
            background-color: lightblue;
        }

        a {
            color: white;
            text-decoration: none;
        }
        
    </style>
</head>
<body>
    <h1>Class One</h1>

    <form action="../php/classOne.php" method="POST">
        <h3>Were the aliens in a vehicle? <select name="vehicle" id="vehicle"> <option value="1">Yes</option> <option value="0">No</option> </select></h3>
        <h3>What type of vehicle was it? <select name="typeVehicle" id="typeVehicle"> <option value="UF">UFO</option> <option value="OT">Other</option> </select></h3>
        <h3>Anything else to add about the vehicle? <input type="text" name = "anyElse" id = "anyElse"></h3>
        <h3>Incident ID: <input type="text" name="ID" id="ID"></h3>
        <input type="submit">
    </form>
</body>
</html>