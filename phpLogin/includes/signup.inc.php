<?php

if (isset($_POST['signup-submit'])) {

    require "dbh.inc.php";

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat) ) { // If their is an empty field
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    } else if ( (!filter_var($email, FILTER_VALIDATE_EMAIL) && (!preg_match("/^[a-zA-Z0-9]*$/", $username) ))) { // If the e-mail is not the correct form
        header("Location: ../signup.php?error=invalidmailuid");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Check if the e-mail is valid
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { // Check if the username is valid, make sure the input is not an attack
        header("Location: ../signup.php?error=invaliduid&mail=".$email);
        exit();
    } else if ($password !== $passwordRepeat) { // Check if the passwords matches
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    } else {
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) { // Check if the username is already being used
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            } else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn); // Initialize statement
                if (!mysqli_stmt_prepare($stmt, $sql)) { // Prepare the statement for execution
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {
                    $hashPwd = password_hash($password, PASSWORD_DEFAULT); // Hash the password into the database

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPwd); // Bind the statement as the question marks (?)
                    mysqli_stmt_execute($stmt); // Execute the sql command
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

else {
    header("Location: ../signup.php");
    exit();
}

