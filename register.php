<?php
include('db.php');

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    // check is paasword matches
    if($password === $confirmpassword)
    {
        $hashed_password = password_hash($password,PASSWORD_DEFAULT);

        // insert into sql database'

        $sql = "INSERT INTO users(username,password) VALUES ('$username','$hashed_password')";


        if($conn->query($sql)===TRUE)
        {
            echo "Regestration successfull";
        }else{
            echo "Error : ".$sql."<br>".$conn->error;
        }
    }else{
        echo "password dfoes not match";
    }

    $conn->close();

}
?>