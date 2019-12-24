<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "pulseinfo";
$dbuser = "pulseuser";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = 'SELECT DISTINCT location FROM pulse';
$sql = 'SELECT location, COUNT(location) as freq FROM pulse GROUP BY location';
		
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



/////////////////////// tag cloud: location, category, and pulse
$sql5 = 'SELECT location, category, pulse FROM pulse';
$query_pulse = mysqli_query($conn, $sql5);
if (!$query_pulse) {
	die ('SQL Error: ' . mysqli_error($conn));
}



/////////////// Visitor counter impl //////////////

    $conn_v = new mysqli($servername, $username, $password, $dbuser);
    if ($conn_v->connect_error) {
        die("Connection failed: " . $conn_v->connect_error);
    } 

    $sql_v = "UPDATE counter SET visits = visits+1 WHERE id = 1";
    $conn_v->query($sql_v);

    $sql_v = "SELECT visits FROM counter WHERE id = 1";
    $result = $conn_v->query($sql_v);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
        }
    } else {
        echo "";
    }
    
    $conn_v->close();



    //////////////// Track visitor ///////////////
    include_once"track.php";
// Create connection
$conn_t = mysqli_connect($servername, $username, $password, $dbuser);

// Check connection
if (!$conn_t) {
    die("Connection failed: " . mysqli_connect_error());
}

$ip_addr = ip_info("Visitor", "ipaddr");
$loc = ip_info("Visitor", "Address");

$sql_t = "INSERT INTO visitor (ipaddr, location)
VALUES ('$ip_addr', '$loc')";
if (mysqli_query($conn_t, $sql_t)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
