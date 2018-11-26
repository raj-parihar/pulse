<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "pulseinfo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// from html code
$name = $_GET["name"];
$age = $_GET["age"];
$location = $_GET["location"];
$sex = $_GET["sex"];
$category = $_GET["category"];
$pulse = $_GET["pulse"];


// creating info into the pulseinfo db
$sql = "INSERT INTO pulse (name, age, location, sex, category, pulse)
VALUES ('$name', '$age', '$location', '$sex', '$category', '$pulse')";

if (mysqli_query($conn, $sql)) {
    echo "Thank you for submitting your pulse info!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
