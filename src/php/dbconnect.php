<?php
$server ="localhost";
$username = "root";
$password ="";
$database = "hmis";

$conn = mysqli_connect($server, $username , $password , $database);
if($conn)
{
        //echo"sucess";
}
else
{
    echo"fail";
}
?>