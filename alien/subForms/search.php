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
    <h1>Search Database</h1>

    <form action="../php/search.php" method='POST'>
        <h3>ID: <input type="text" name="ID"></h3>
        <h3>First Name: <input type="text" name="fname"></h3>
        <h3>Last Name: <input type="text" name="lname"></h3>

        <input type="submit">
    </form>
</body>
</html>