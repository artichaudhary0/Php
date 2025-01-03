<?php

if($_SERVER['REQUEST_METHOD']==="POST")
{
    $name = $_POST['name'];
    $email = $_POST["email"];
    echo "name : $name<br>Email : $email<br>";
}

if($_SERVER['REQUEST_METHOD']==="GET")
{
    $name = $_GET['name'] ?? "No name provided";
    $email = $_GET["email"] ?? "No email provided";
    echo "name : $name<br>Email : $email<br>";
}


// $_REQUEST work for both GET AND POST 
$data = $_REQUEST['name'] ?? "No Data";
echo "Name from \$_REQUEST : $data"
?>