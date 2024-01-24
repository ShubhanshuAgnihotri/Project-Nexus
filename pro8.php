<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portal";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// $result = mysqli_query('SELECT locations, names, rates, years, photo name FROM cars');

if($conn)
{
    // 
     
}
else
{
    echo "nooo".mysql_connect_error();
}
