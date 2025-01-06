<?php
$servername = "localHost"; // your database server
$username = "root"; // database username
$password = ""; // your database password (empty for XAMPP default server)
$dbname = "user_system"; // your db name

$conn new mysqli($servername , $username , $password , $dbname);

// check connect 
if($conn->connect_error)
{
    die("Connection failed : ".$conn-.connect_error);
}

?>