<?php
    require "header.php";
?>

    <main>
        <div>
            <section>
                <h1>Signup</h1>
                <?php 
                    if (isset($_GET['error'])) { // If something went wrong with the signup process let the client know what they need to fill in
                        if ($_GET['error'] == "emptyfields") { 
                            echo "<p>Fill in all fields!</p>";
                        } else if ($_GET["error"] == "invalidmailuid") { 
                            echo "<p>Invalid username and e-mail!</p>";
                        } else if ($_GET["error"] == "invaliduid") { 
                            echo "<p>Invalid username!</p>";
                        } else if ($_GET["error"] == "invalidmail") { 
                            echo "<p>Invalid e-mail!</p>";
                        } else if ($_GET["error"] == "passwordcheck") { 
                            echo "<p>Your passwords do not match!</p>";
                        } else if ($_GET["error"] == "usertaken") { 
                            echo "<p>Username is already taken!</p>";
                        }
                    } else if ($_GET["signup"] == "success") {
                        echo "<p>Signup successful!</p>";
                    }
                ?>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                    <button type="submit" name="signup-submit">Submit</button>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>