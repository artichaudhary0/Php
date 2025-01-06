<?php
include('db.php');

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];


    // check the user exist 
    $sql = "SELECT *FROM users WHERE username='$username'";

    $result = $conn->query($sql);




    if($result->num_rows>0)
    {
        $row = $result->fetch_assoc();

        // verify username and password

        if(password_verify($password,$row['password'])){
            echo " login successfull";
        }else{
            echo " login un-successfull";
        }
        
    }else{
        echo "user does not exist";
    }
    $conn->close();

}

?>