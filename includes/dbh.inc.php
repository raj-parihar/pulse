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

$sql = 'SELECT DISTINCT location FROM pulse';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}


//sex ratio 
$sql1 = 'SELECT sex, COUNT(sex) AS freq FROM pulse GROUP BY sex';
$query1 = mysqli_query($conn, $sql1);
if (!$query1) {
	die ('SQL Error: ' . mysqli_error($conn));
}

// age histogram
$sql2 = 'SELECT age, COUNT(age) AS freq FROM pulse GROUP BY age';
$query2 = mysqli_query($conn, $sql2);
if (!$query2) {
	die ('SQL Error: ' . mysqli_error($conn));
}


// category histogram
$sql3 = 'SELECT category, COUNT(category) AS freq FROM pulse GROUP BY category';
$query3 = mysqli_query($conn, $sql3);
if (!$query3) {
	die ('SQL Error: ' . mysqli_error($conn));
}


// sentiment histogram
$sql4 = 'SELECT sentiment, COUNT(sentiment) AS freq FROM pulse GROUP BY sentiment';
$query4 = mysqli_query($conn, $sql4);
if (!$query4) {
	die ('SQL Error: ' . mysqli_error($conn));
}



?>
