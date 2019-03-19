<?php

// establishes a database connection and stores 
// the connection in global variable $conn

$servername = "db";
$username = "test";
$password = "test";
$database = "demo";
$port = "3306";

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
