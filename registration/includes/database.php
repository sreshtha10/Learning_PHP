<?php


$dbhost = "localhost";
$dbUser = "root";
$dbPass = "sreshtha";
$dbName = "php";

// connection to database.
$conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);

if($conn){



}else{
    die("Database connection failed !");
}

?>