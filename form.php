<?php

    if($_SERVER['REQUEST_METHOD']==="POST")
    {
        $firstName = htmlspecialchars($_POST["firstName"]);
        $lastName = htmlspecialchars($_POST["lastName"]);
        $dob = htmlspecialchars($_POST["dob"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $email = htmlspecialchars($_POST["email"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $address = htmlspecialchars($_POST["address"]);
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        $firstName = htmlspecialchars($_POST["firstName"]);
        $firstName = htmlspecialchars($_POST["firstName"]);
        echo "<p>First Name : $firstName</p>"
    }

?>