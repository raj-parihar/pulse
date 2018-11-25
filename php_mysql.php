<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "pulseuser";


// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


?> 

