
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/index.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Search For ID</title>
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
    <form id='formID' action="../php/id.php" method="POST">
        <h3>Enter First Name: <input type="text" name="fname"></h3>
        <h3>Enter Last Name: <input type="text" name="lname"></h3>
        
    </form>
        <button id="form" onclick="submitForm()">Submit</button>
    <script>
        
        submitForm = function() {
            document.getElementById("formID").submit();
        }
    </script>
</body>
</html>