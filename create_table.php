<!-- table connect server -->
<?php
   $servername = "your-hostname.com"; // replace
   $username = "username";
   $password = "password";
   $database = "database name";



    // create a connection 
    $conn = new mysqli($servername,$username,$password,$database);

    // check connection
    if($conn->connect_error)
    {
        die("Connection Failed!!!".$conn->connect_error);
    }

    // create table 

    $sql = "CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50) NOT NULL,email VARCHAR(50) NOT NULL)";

    if($conn->query($sql)=== TRUE)
    {
        echo "Table users created successfully!!";
    }else{
        echo "Table users creation failed!!"
    }


    // insert
    $sql = "INSERT INTO users(name email) VALUES ('Arti', 'arti@gmail.com'),('singh', 'singh@gmail.com')";


    if($conn->query($sql)=== TRUE)
    {
        echo "Record inserted successfully";
    }else{
        echo "Table users unsuccessfully";
    }

    $conn->close();
?>
