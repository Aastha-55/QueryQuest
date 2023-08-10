<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "search_engine";

// to create connection

$conn = mysqli_connect($servername , $username , $password , $dbname);

if($conn){
    // echo "Connection Sucessful";
}
else{
    die ("Connection Failed".mysql_connect_error());
}
?>