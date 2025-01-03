<?php
    $servernae = "yourservername.com";
    $username = "username";
    $password = "password";
    $database = "database name";



    // connection create
    $conn = new mysqli($servernae,$username,$password,$database);

    // check connection
    if($conn->connect_error)
    {
        die("Connection Failed!!!".$conn->connect_error);
    }


    // fetch data
    $sql = "SELECT *FROM users"; // data of table

    $result = $conn->query($sql);


    if($result->num_rows > 0)
    {
        while($row = $result->$fetch_assoc()){
            echo "ID :".$row["id"]."-Name :".$row["name"]."-Email:".$row["email"]."<br>";
        }
    }else{
        echo "No record found";
    }

    %conn->close();

?>