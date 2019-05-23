<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
    <h1>PHP Login | Created by Mike D</h1>
    <header>
        <nav>
            
            <div class="header">
                <div class="header-left">
                    <a href="#">
                        <img src="img/best_westada_smaller.png" alt="logo" id="logo">
                    </a>
                    
                </div>

                <div id="header-left-mid">
                    <div class="table">
                        <ul id="horizontal-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">About me</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>    

                <div class="header-right">
                    <form action="includes/login.inc.php" method = "post" class="rightForm">
                            <input type="text" name="mainuid" placeholder="Username/E-mail...">
                                    
                            <input type="password" name="pwd" placeholder="Password...">
                                    
                            <button type="submit" name="login-submit">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>
                    <form action="includes/logout.inc.php" method = "post" class="rightForm">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>
                </div>

            </div>
        </nav>
    </header>