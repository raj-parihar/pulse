<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "nruinfo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// from html code
$name = $_GET["name"];
$age = $_GET["age"];
$phone = $_GET["phone"];
$email = $_GET["email"];
$qualification = $_GET["qualification"];
$gender = $_GET["gender"];
$location = $_GET["location"];
$state = $_GET["state"];
$sector = $_GET["sector"];
$duration = $_GET["duration"];
$extrainfo = $_GET["extrainfo"];



// creating info into the nruinfo db
$sql = "INSERT INTO NRU (name, age, phone, email, qualification, gender, location, state, sector, duration, extrainfo)
VALUES ('$name', '$age', '$phone', '$email', '$qualification', '$gender', '$location', '$state', '$sector', '$duration', '$extrainfo')";


if ($age == "blank") {
	header('Location: index.php?msg=errage');
}
elseif ($qualification == "blank") {
	header('Location: index.php?msg=errqualification');
}
elseif ($gender == "blank") {
	header('Location: index.php?msg=errgender');
}
elseif($location == ""){
	header('Location: index.php?msg=errlocation');
}
elseif ($state == "blank") {
	header('Location: index.php?msg=errstate');
}
elseif($sector =="blank"){
	header('Location: index.php?msg=errsector');
}
elseif($duration =="blank"){
	header('Location: index.php?msg=errduration');
}
else {
	if (mysqli_query($conn, $sql)) {
		echo "Thank you for submitting your NRU info!";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	header('Location: index.php?msg=success');
}

mysqli_close($conn);


?>
