<?php
$storedPassord = $storedPassword = '$2y$10$wG8ghT6gPT9QxLgrRmp2kOtK5a5C5kdQgCgENOMz67rHc4WDFt7/y';
echo "sbuosdfsd";

// check if form is submitted?
if($_SERVER["REQUEST_METHOD"]==="POST")
{

    
    $entered_password = $_POST['password'];

    if(password_verify($entered_password,$storedPassord)){
        echo "<p>Password is correct. Welcome</p>";
    }else{
        echo "<p>Password is in-correct. Please try again</p>";
    }
}
?>