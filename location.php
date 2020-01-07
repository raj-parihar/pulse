<!DOCTYPE html >
<html lang="en">
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>nruinfo.org</title>
    <style>

      #map {
        height: 90%;
	width: 90%;
	top: 0%;
	left: 3%;
	right: 3%;
	bottom: 25%;
	padding: 2%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

/* Add a black background color to the top navigation */
.topnav {
    position: relative;
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

/* Centered section inside the top navigation */
.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}

/* Responsive navigation menu - display links on top of each other instead of next to each other (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }

  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}

div.srch_eng {
    max-width:400px;
    margin: auto;
    align: right;
    border: 2px solid #73AD21;
}


    </style>
  </head>
  <body>
	  <div>
	  <img src="cwd_src_logo.jpg" alt="Pulse Infographics" style="max-width:191px; max-height:128px;" align="right">
	  </div>

	  <br><br>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    max-width: 1000px;
    margin: 50px;
}


#cities {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
}

#cities td, #cities th {
    border: 1px solid #ddd;
    padding: 8px;
}

#cities tr:nth-child(even){background-color: #f2f2f2;}

#cities tr:hover {background-color: #ddd;}

#cities th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

</style>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="index.php"><div class="w3-xxxlarge"><i class="fa fa-home"></i></div></a>
  </div>

  <!-- Left-aligned links (default) -->
  <a href="dir.php"><div class="w3-xxlarge"><i class="fa fa-bar-chart"></i></div></a>
  <a href="cloud.php"><div class="w3-xxlarge"><i class="fa fa-eye"></i></div></a>
  <a href="pulse.php"><div class="w3-xxlarge"><i class="fa fa-location-arrow"></i></div></a>

  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="contest.php"><div class="w3-xxlarge"><i class="fa fa-tasks"></i></div></a>
    <a href="contact.php"><div class="w3-xxlarge"><i class="fa fa-envelope"></i></div></a>
    <a href="about.php"><div class="w3-xxlarge"><i class="fa fa-users"></i></div></a>
  </div>

<?php
$location = $_GET["loc"];
$address = explode (",", $location);
?>

</div> 

	  <br><br>

	  <center>
	  <font size="100" face="georgia">Location: <font color="darkviolet"><b><?php echo $location ?></b></font> </font>
	   </center>
	  <br><br>


<div>
<?php
include_once "includes/dbh.inc.php"; // this will include a.php
?>

<table id="cities" align="center">
    		<th colspan="2"><center>Respondents</center></th>
		<tbody>
		<tr>
			<td><div id="piechart"></div> </td>
			<td><div id="histgram"></div> </td>

		</tr>

		</tbody>
	</table>

<br><br>

<table id="cities" align="center">
    		<th colspan="2"><center>NRU Analysis: Sectors and Durations</center></th>
		<tbody>
		<tr>
			<td><div id="piechart1"></div> </td>
			<td><div id="piechart2"></div> </td>

		</tr>

		</tbody>
	</table>
<br><br>


<table id="cities" align="center">
    		<th colspan="2"><center>NRU Analysis: Qualification and Categories</center></th>
		<tbody>
		<tr>
			<td><div id="piechart3"></div> </td>
			<td><div id="piechart4"></div> </td>

		</tr>

		</tbody>
	</table>
<br><br>

<table id="cities" align="center">
    		<th colspan="2"><center>NRU Reporting Timeline: Job Sector wise</center></th>
		<tbody>
		<tr>
			<td><div id="histgram2"></div> </td>
		</tr>

		</tbody>
	</table>
<br><br>

<table id="cities" align="center">
    		<th colspan="2"><center>NRU Reporting Timeline: Field/Area wise</center></th>
		<tbody>
		<tr>
			<td><div id="histgram3"></div> </td>
		</tr>

		</tbody>
	</table>
<br><br>

<table id="cities" align="center">
    		<th colspan="2"><center>Web Content</center></th>
		<tbody>
		<tr>
			<td>
                        <center>
			<a href="https://en.wikipedia.org/wiki/<?php echo $address[0]?>"><div class="w3-xxxlarge"><i class="fa fa-wikipedia-w"></i></div></a>
                        </center>
			</td>
			<td>
                        <center>
			<a href="https://www.google.com/search?q=<?php echo $location?>"><div class="w3-xxxlarge"><i class="fa fa-search-plus"></i></div></a>
                        </center>
			</td>
		</tr>

		</tbody>
	</table>
<br><br>



<table id="cities" align="center">
<th colspan="2"><center>Wiki Info Cloud: <b> <?php echo $location ?> </b> </center></th>
		<tbody>
		<tr>
			<td>
			<?php
                        $_GET['city'] = $address[0];
                        $_GET['state'] = $address[1];
                        $_GET['location'] = $location;
			include "loc_cloud.php";
			?>
			</td>
		</tr>

		</tbody>
	</table>
<br><br>



    <!---div id="message">Pulse info saved!</div--->
        <br><br>
	<footer>&copy; NRUinfo org </footer>
        <br>

<?php
// Database credentials
$dbHost = 'localhost';
$dbUsername = 'user';
$dbPassword = 'password';
$dbName = 'nruinfo';
// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get data from database
$gender_pie = $db->query("SELECT gender, COUNT(gender) AS freq FROM (SELECT * FROM NRU WHERE location='$location') AS pulse_loc GROUP BY gender");
$sector_pie = $db->query("SELECT sector, COUNT(sector) AS freq FROM (SELECT * FROM NRU WHERE location='$location') AS pulse_loc GROUP BY sector");
$duration_pie = $db->query("SELECT duration, COUNT(duration) AS freq FROM (SELECT * FROM NRU WHERE location='$location') AS pulse_loc GROUP BY duration");
$qual_pie = $db->query("SELECT qualification, COUNT(qualification) AS freq FROM (SELECT * FROM NRU WHERE location='$location') AS pulse_loc GROUP BY qualification");
$category_pie = $db->query("SELECT category, COUNT(category) AS freq FROM (SELECT * FROM NRU WHERE location='$location') AS pulse_loc GROUP BY category");
$age_hist = $db->query("SELECT age, COUNT(age) AS freq FROM (SELECT * FROM NRU WHERE location='$location') AS pulse_loc GROUP BY age");
$cat_hist = $db->query("SELECT category, COUNT(category) AS freq FROM (SELECT * FROM NRU WHERE location='$location') AS pulse_loc GROUP BY category");

$time_hist = $db->query("SELECT date(time), sector FROM (SELECT * FROM NRU WHERE location='$location') AS pulse_loc");
$time_hist1 = $db->query("SELECT date(time), field FROM (SELECT * FROM NRU WHERE location='$location') AS pulse_loc");

$time_stamp = array();
$time_stamp1 = array();

#$cats = array("general", "health", "education", "water", "economic", "governence", "social", "cultural", "environment", "housing", "laworder", "malnourishment", "agrarian", "industrial", "other");
$sectors = array("government", "semigovernment", "private", "nonprofit", "unorganized", "other");
$fields = array("agriculture", "adminstration", "automobile", "consulting", "construction", "distribution", "entertainment", "education", "engineering", "finance", "food", "healthcare", "hospitality", "infotech", "realstate", "laworder", "legal", "manufacturing", "mining", "public service", "retail", "restaurents", "sports", "service", "social", "transport", "trade", "other");



if($time_hist->num_rows > 0){
   while($row = $time_hist->fetch_assoc()){
	   //echo $row['date(time)'], $row['sector']; 
	   //echo "<br>";

	   if(!array_key_exists($row['date(time)'], $time_stamp)) {
		   $time_stamp[$row['date(time)']] = array_fill(0, count($sectors), 0);
	   }
           
	   $cat_idx = array_search($row['sector'], $sectors);
	   //echo "<br>";

	   $time_stamp[$row['date(time)']][$cat_idx] ++;
   }

}
if($time_hist1->num_rows > 0){
   while($row = $time_hist1->fetch_assoc()){
	   //echo $row['date(time)'], $row['field']; 
	   //echo "<br>";

	   if(!array_key_exists($row['date(time)'], $time_stamp1)) {
		   $time_stamp1[$row['date(time)']] = array_fill(0, count($fields), 0);
	   }
           
	   $cat_idx = array_search($row['field'], $fields);
	   //echo "<br>";

	   $time_stamp1[$row['date(time)']][$cat_idx] ++;
   }

}



?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart_sex);
google.charts.setOnLoadCallback(drawChart_sector);
google.charts.setOnLoadCallback(drawChart_duration);
google.charts.setOnLoadCallback(drawChart_qualification);
google.charts.setOnLoadCallback(drawChart_category);
google.charts.setOnLoadCallback(drawChart_age);
google.charts.setOnLoadCallback(drawChart_cat);
google.charts.setOnLoadCallback(drawChart_time);
google.charts.setOnLoadCallback(drawChart_time1);

function drawChart_time() {

    var data = google.visualization.arrayToDataTable([
       ["TimeStamp", "government", "semigovernment", "private", "nonprofit", "unorganized", "other"],
<?php

      foreach($time_stamp as $key => $value){
	      $line =  "['".$key."', ";

	  foreach($value as $val) {
              $line = $line.$val.", ";
	  }
	  $line = $line."],";
	  echo $line;
      }   

      ?>
    ]);
    
    var options = {
    title: 'Sector wise information',
        width: 1120,
	height: 500,
	bar: {groupWidth: "20%"},
	isStacked: true,
	legend: { position: 'top', maxLines: 3 },
    };
    
    var chart = new google.visualization.ColumnChart(document.getElementById('histgram2'));
    
    chart.draw(data, options);
}


function drawChart_time1() {

    var data = google.visualization.arrayToDataTable([
        ["TimeStamp", "agriculture", "adminstration", "automobile", "consulting", "construction", "distribution", "entertainment", "education", "engineering", "finance", "food", "healthcare", "hospitality", "infotech", "realstate", "laworder", "legal", "manufacturing", "mining", "public service", "retail", "restaurents", "sports", "service", "social", "transport", "trade", "other"],
<?php

      foreach($time_stamp1 as $key => $value){
	      $line =  "['".$key."', ";

	  foreach($value as $val) {
              $line = $line.$val.", ";
	  }
	  $line = $line."],";
	  echo $line;
      }   

      ?>
    ]);
    
    var options = {
    title: 'Field/Area wise information',
        width: 1120,
	height: 500,
	bar: {groupWidth: "20%"},
	isStacked: true,
	legend: { position: 'top', maxLines: 3 },
    };
    
    var chart = new google.visualization.ColumnChart(document.getElementById('histgram3'));
    
    chart.draw(data, options);
}



function drawChart_sex() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($gender_pie->num_rows > 0){
          while($row = $gender_pie->fetch_assoc()){
            echo "['".$row['gender']."', ".$row['freq']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Gender Ratio',
        width: 500,
	height: 300,
	pieHole: 0.4,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}

function drawChart_sector() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($sector_pie->num_rows > 0){
          while($row = $sector_pie->fetch_assoc()){
            echo "['".$row['sector']."', ".$row['freq']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'NRU by Sector',
        width: 500,
	height: 300,
	pieHole: 0.4,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
    
    chart.draw(data, options);
}

function drawChart_duration() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($duration_pie->num_rows > 0){
          while($row = $duration_pie->fetch_assoc()){
            echo "['".$row['duration']."', ".$row['freq']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'NRU by Duration',
        width: 500,
	height: 300,
	pieHole: 0.4,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
    
    chart.draw(data, options);
}

function drawChart_qualification() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($qual_pie->num_rows > 0){
          while($row = $qual_pie->fetch_assoc()){
            echo "['".$row['qualification']."', ".$row['freq']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'NRU by Qualifcations',
        width: 500,
	height: 300,
	pieHole: 0.4,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
    
    chart.draw(data, options);
}

function drawChart_category() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($category_pie->num_rows > 0){
          while($row = $category_pie->fetch_assoc()){
            echo "['".$row['category']."', ".$row['freq']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'NRU by Category',
        width: 500,
	height: 300,
	pieHole: 0.4,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
    
    chart.draw(data, options);
}


function drawChart_age() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Count'],
      <?php
      if($age_hist->num_rows > 0){
          while($row = $age_hist->fetch_assoc()){
            echo "['".$row['age']."', ".$row['freq']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Age Group Distribution',
        width: 600,
	height: 300,
	bar: {groupWidth: "20%"},
	legend: {position: 'none'}
    };
    
    var chart = new google.visualization.ColumnChart(document.getElementById('histgram'));
    
    chart.draw(data, options);
}

function drawChart_cat() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Count'],
      <?php
      if($cat_hist->num_rows > 0){
          while($row = $cat_hist->fetch_assoc()){
            echo "['".$row['category']."', ".$row['freq']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'NRU by Categories',
        width: 600,
	height: 300,
	bar: {groupWidth: "20%"},
	legend: {position: 'none'}
    };
    
    var chart = new google.visualization.ColumnChart(document.getElementById('histgram1'));
    
    chart.draw(data, options);
}




</script>




    <script>
      var map;
      var marker;
      var infowindow;
      var messagewindow;

      function initMap() {
        var california = {lat: 37.4419, lng: -122.1419};
        var map_ctr = {lat: 25, lng: 0};
        map = new google.maps.Map(document.getElementById('map'), {
          center: map_ctr,
          zoom: 2.9
        });

        infowindow = new google.maps.InfoWindow({
          content: document.getElementById('form')
        });

        messagewindow = new google.maps.InfoWindow({
          content: document.getElementById('message')
        });

        google.maps.event.addListener(map, 'click', function(event) {
          marker = new google.maps.Marker({
            position: event.latLng,
            map: map
          });


          google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
          });
        });
      }

      function saveData() {
        var name = escape(document.getElementById('name').value);
        var age = escape(document.getElementById('age').value);
        var sex = document.getElementById('sex').value;
        var address = escape(document.getElementById('address').value);
        var pulse = escape(document.getElementById('pulse').value);
        var latlng = marker.getPosition();
        var url = 'phpsqlinfo_addrow.php?name=' + name + '&age=' + age + '&sex=' + sex 
		  + '&address=' + address + 
                  '&pulse=' + pulse + '&lat=' + latlng.lat() + '&lng=' + latlng.lng();

        downloadUrl(url, function(data, responseCode) {

          if (responseCode == 200 && data.length <= 1) {
            infowindow.close();
            messagewindow.open(map, marker);
          }
        });
      }

      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request.responseText, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing () {
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjtZ5hjA0B6feyeND5hcQ6E9R65s2z_YU&callback=initMap">
    </script>
  </body>
</html>


