<?php

    include "config.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        echo"Fil all fields";
        header("refresh:3; url=login.php");
    } else {
        $sql = "SELECT * from users WHERE username=:username";
        $tempSQL = $conn->prepare($sql);
        $tempSQL->bindParam(":username", $username);
        $tempSQL->execute();

        if($tempSQL->rowCount() > 0) {
            $data = $tempSQL->fetch();

            if(password_verify($password, $data['password'])) {
                header("Location: dashboard.php");
            }else {
                echo "password is incorrect!";
                header("refresh:3; url=login.php");
            }
        }else{
            echo "User not Found!";
            header("refresh:3; url=login.php");
        }
    } 
}
