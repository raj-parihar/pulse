<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>pulse.fyi</title>
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
	  <img src="pulse_logo.png" alt="Pulse Infographics" style="max-width:128px; max-height:128px;" align="right">
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
    width: 50%;
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

 <!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="index.php" >Home</a>
  </div>

  <!-- Left-aligned links (default) -->
  <a href="pulse.php">Pulse</a>
  <a href="" class="active">Directory</a>

  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
  </div>

</div> 

	  <br><br>

	  <center>
		   <font size="50" face="georgia">Directory of Locations (A-Z)</font> 
	   </center>
	  <br><br>

<div class="srch_eng">
<script>
  (function() {
    var cx = '005828985785630724111:ekaqk3jotby';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
</div>

<br><br>






<div>
<?php
include_once "includes/dbh.inc.php"; // this will include a.php
?>

<table id="cities" align="center">
    		<th colspan="2"><center>Gender Ratio (Fixme: PieChart)</center></th>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query1))
		{
			echo '<tr>
					<td>'.$row['sex'].'</td>
					<td>'.$row['freq'].'</td>
				</tr>';

		}
                ?>
		</tbody>
	</table>

<br><br>
<table id="cities" align="center">
    		<th colspan="2"><center>Age Group (Fixme: HistGram)</center></th>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query2))
		{
			echo '<tr>
					<td>'.$row['age'].'</td>
					<td>'.$row['freq'].'</td>
				</tr>';

		}
                ?>
		</tbody>
	</table>

<br><br>
<table id="cities" align="center">
    		<th colspan="2"><center>Pulse by Categories (Fixme: HistGram)</center></th>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query3))
		{
			echo '<tr>
					<td>'.$row['category'].'</td>
					<td>'.$row['freq'].'</td>
				</tr>';

		}
                ?>
		</tbody>
	</table>
<br><br>
<table id="cities" align="center">
    		<th><center>Locations Reporting Pulses (Fixme: add links)</center></th>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['location'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>


</div>





    <!---div id="message">Pulse info saved!</div--->
        <br><br>
	<footer>&copy; Copyright 2018 Pulse Infographics </footer>
        <br>

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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8n7c7LxEqjjVotJUW-B22a9ysIqZPDjo&callback=initMap">
    </script>
  </body>
</html>


