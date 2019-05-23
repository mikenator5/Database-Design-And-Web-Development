<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alien Abduction</title>
    <style>
        body {
            background-image: url("images/space.jpg");
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
        
        
    </style>
</head>
<body >
    <h1>Alien Interraction | Created by Mike D</h1>

    <div class="form">
        <form id="main" action="php/alien.php" method='POST'>
            <h3>First Name: <input type="text" name="fname" required></h3> 
            <h3>Last Name: <input type="text" name = "lname" required></h3>
            <h3>Date of Birth: <input type="date" name="dateBirth"></h3>

            <h3>Email Address: <input type="email" name="email"></h3>
            <h3>Phone Number: <input type="text" name="phoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="(123)-456-7890"></h3>

            <h3>Street Address: <input type="text" name="streetAddress"></h3>
            <h3>City: <input type="text" name="city"></h3>
            <h3>State Address: <input type="text" name="stateAddress" pattern="[a-zA-Z]{2}"></h3>
            <h3>Zip Code: <input type="text" name="zipCode"></h3>
            <h3>Country: <input type="text" name="country"></h3>
            
        </form>
        
    </div>

    
    <button id="sub">Submit</button>
    <br>
    <button id="skip">Already Registered?</button>
    <br>
    <button id="search">Search</button>
    <br>
    <button id="erd">ERD</button>
    <h1 id="test"></h1>
    
   <script>

       
        document.getElementById("sub").onclick = function () { 
            document.getElementById("main").submit();
        }

        document.getElementById("skip").onclick = function () { 
            location.href = "subForms/incident.php";
        }

        document.getElementById("search").onclick = function () { 
            location.href = "subForms/search.php";
        }

        document.getElementById("erd").onclick = function () { 
            location.href = "subForms/erd.html";
        }
   </script>
    
</body>
</html>