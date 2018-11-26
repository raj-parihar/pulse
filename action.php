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

// from html code
$name = $_GET["name"];
$email = $_GET["email"];
$location = $_GET["location"];
$subject = $_GET["subject"];
$message = $_GET["message"];


$sql = "INSERT INTO contact (name, email, location, subject, message)
VALUES ('$name', '$email', '$location', '$subject', '$message')";
if (mysqli_query($conn, $sql)) {
    echo "Message received successfully! We will get back to you soon.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


header('Location: contact.php?msg=successful');

?>
