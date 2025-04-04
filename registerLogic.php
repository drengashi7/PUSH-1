<?php

// echo '<pre>' . var_export($_POST, true) . '</pre>';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $temPass = $_POST['password'];
    $password = password_hash($temPass, PASSWORD_DEFAULT);

    // Check if any field is empty
    if (empty($name) || empty($surname) || empty($username) || empty($email) || empty($temPass)) {
        echo "Please fill all the fields!";
        header("refresh:3; url=register.php");
        exit(); // Stop further script execution
    } else {
        // SQL to check if the username already exists
        $sql = "SELECT username FROM users WHERE username = :username";

        // Prepare the SQL query
        $temSQL = $conn->prepare($sql);
        $temSQL->bindParam(":username", $username); // Corrected variable name
        $temSQL->execute(); // Execute the query

        // Check if any row with the same username exists
        if ($temSQL->rowCount() > 0) {
            echo "Username already exists.";
            header("refresh:3; url=register.php"); // Redirect after message
           
        }else{
            $sql = "INSERT INTO users (name, surname, username, email, :password)";

            $temSQL = $conn->prepare($sql);
            $temSQL->bindParam(":name",$name);
            $temSQL->bindParam(":surname"$surname)
            $temSQL->bindParam(":username"$username)
            $temSQL->bindParam(":surname"$surname)
            $temSQL->bindParam(":surname"$surname)
            
        }
    }
}
?>
