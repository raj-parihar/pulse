<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "pulseuser";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (name, email, location, subject, message)
VALUES ('Raj Parihar', 'prince.parihar@gmail.com', 'San Jose, CA, USA', 'Others', 'Good work!')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?> 

