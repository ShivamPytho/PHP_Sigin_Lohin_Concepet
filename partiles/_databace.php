<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = mysqli_connect($server, $username, $password, $database);
if($conn)
{
    // echo "Connections Successfully ";
}
else 
{
    echo "Not Connect";
}
?>