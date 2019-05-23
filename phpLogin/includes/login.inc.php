<?php

if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) { // Check if information received is empty
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn); // Initialize statement
        if (!mysqli_stmt_prepare($stmt, $sql)) { // Prepares the statement for being used
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid); // Bind values of variables to ? in $sql
            mysqli_stmt_execute($stmt); // Execute the statement

            $result = mysqli_stmt_get_result($stmt); // Get the results from the statement that was executed
            if ($row = mysqli_fetch_assoc($result)) { // Make the results an array

                $pwdCheck = password_verify($password, $row['pwdUsers']); // Check if the password equals the password
                if ($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpwd");
                    exit(); 
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers']; // Instantiate varables for the session to see if user is logged in
                    $_SESSION['userUid'] = $row['uidUsers'];

                    header("Location: ../index.php?login=success");
                    exit();

                }

            } else {;
                header("Location: ../index.php?error=nousers");
                exit();
            }
        }
    }


} else {
    header("Location: ../index.php");
    exit();
}