<?php

//Conection DES
$servername = "localhost";
$database = "jubiladosrv";
$username = "root";
$password = "";

//Conection PRD
//$servername = "localhost";
//$database = "esywerce_jubiladosrv";
//$username = "esywerce_jubi";
//$password = "4B6HXbQt8@@,";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>