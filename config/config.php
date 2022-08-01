<?php

$servername = "10.50.11.109";
$username = "root";
$password = "Admin@#Tec";

// Create connection
$conn = new mysqli($servername, $username, $password,'newweb');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";