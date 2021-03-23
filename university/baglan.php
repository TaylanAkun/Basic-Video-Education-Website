<?php

$username = "root";
$password = "";
$sunucu = "localhost";
$database = "egitimsite";

// Create connection
$conn = new mysqli($sunucu, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
        
        } 


?>