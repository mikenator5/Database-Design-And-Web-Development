<?php
    session_start(); // Start the Session to properly clear it
    session_unset(); // Unsets all of the variables in the Session
    session_destroy(); // Destroys the Session
    
    header("Location: ../index.php"); // Return to the main page
    exit();