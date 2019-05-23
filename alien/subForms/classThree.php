<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class Three Report</title>
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
    <h1>Class Three</h1>

    <form action="../php/classThree.php" method="POST">
        <h3>Were the aliens in a vehicle? <select name="vehicle" id="vehicle"> <option value="1">Yes</option> <option value="0">No</option> </select></h3>
        <h3>What type of vehicle was it? <select name="typeVehicle" id="typeVehicle"> <option value="UF">UFO</option> <option value="OT">Other</option> </select></h3>
        <h3>Were you harmed? <select name="yesHarmed" id="yesHarmed"> <option value="1">Yes</option> <option value="0">No</option> </select></h3>
        <h3>Was the environment harmed? <select name="yesEnviro" id="yesEnviro"> <option value="1">Yes</option> <option value="0">No</option> </select></h3>
        <h3>Was there a trace of aliens? <select name="yesTrace" id="yesTrace"> <option value="1">Yes</option> <option value="0">No</option> </select></h3>
        <h3>Describe the trace: <input type="text" name="trace"></h3>

        <h3>Color of the alien: <input type="text" name="color"></h3>
        <h3>Number of legs standing on (number): <input type="text" name="legs"></h3>
        <h3>What animal did it look like? <input type="text" name="animal"></h3>
        <h3>Any other appendages? <input type="text" name="appendages"></h3>
        <h3>What size was the alien? <input type="text" name="size"></h3>
        <h3>Number of eyes? <input type="text" name="eyes"></h3>
        <h3>Were you abducted? <select name="abducted" id="abducted"> <option value="1">Yes</option> <option value="0">No</option> </select></h3>
        <h3>Were you taken to another world? <select name="world" id="world"> <option value="1">Yes</option> <option value="0">No</option> </select></h3>

        <h3>How long were you gone? <input type="text" name="time"></h3>
        <h3>How many were there (number) ? <input type="text" name="number"></h3>

        <h3>Anything else to add? <input type="text" name = "anyElse" id = "anyElse"></h3>
        <h3>Incident ID: <input type="text" name="ID" id="ID"></h3>
        <input type="submit">
    </form>
</body>
</html>