<!DOCTYPE html >
<html lang="en">
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
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
</style>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 <!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="index.php" class="active"><div class="w3-xxxlarge"><font color="darkviolet"><i class="fa fa-home"></i></font></div></a> 
  </div>

  <!-- Left-aligned links (default) -->
  <a href="pulse.php"><div class="w3-xxlarge"><i class="fa fa-heartbeat"></i></div></a>
  <a href="dir.php"><div class="w3-xxlarge"><i class="fa fa-globe"></i></div></a>
  <a href="cloud.php"><div class="w3-xxlarge"><i class="fa fa-cloud"></i></div></a>

  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="contest.php"><div class="w3-xxlarge"><i class="fa fa-trophy"></i></div></a>
    <a href="contact.php"><div class="w3-xxlarge"><i class="fa fa-envelope"></i></div></a>
    <a href="about.php"><div class="w3-xxlarge"><i class="fa fa-users"></i></div></a>
  </div>

</div> 

	  <br><br>

	  <center>
		   <font size="100" face="georgia"><font color="darkviolet"><b>NRU:</b></font> <u>N</u>ational <u>R</u>egistry of <u>U</u>nemployment</font>

	  <br><br>
<?php
    if($_GET['msg'] == "success")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="green" size="6">
    Thank you for submitting your pulse info! <font size="8"><i class="fa fa-smile-o"></i></font>
    </font>
    </b>
    </p>
</div>
<?php }
?>

<?php
    if($_GET['msg'] == "errlocation")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="red" size="6">
    Please submit pulse info with a location! <font size="8"><i class="fa fa-frown-o"></i></font>
    </font>
    </b>
    </p>
</div>
<?php }
?>

<?php
    if($_GET['msg'] == "errage")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="red" size="6">
    Please select an age group! <font size="8"><i class="fa fa-frown-o"></i></font>
    </font>
    </b>
    </p>
</div>
<?php }
?>

<?php
    if($_GET['msg'] == "errsex")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="red" size="6">
    Please select a gender option! <font size="8"><i class="fa fa-frown-o"></i></font>
    </font>
    </b>
    </p>
</div>
<?php }
?>


<?php
    if($_GET['msg'] == "errsentiment")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="red" size="6">
    Please select an apporopriate sentiment! <font size="8"><i class="fa fa-frown-o"></i></font>
    </font>
    </b>
    </p>
</div>
<?php }
?>

<?php
    if($_GET['msg'] == "errcategory")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="red" size="6">
    Please select an apporopriate category! <font size="8"><i class="fa fa-frown-o"></i></font>
    </font>
    </b>
    </p>
</div>
<?php }
?>

<?php
    if($_GET['msg'] == "errpulse")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="red" size="6">
    Please describe your pulse in a few words! <font size="8"><i class="fa fa-frown-o"></i></font>
    </font>
    </b>
    </p>
</div>
<?php }
?>




	   </center>

    <div id="map" height="460px" width="100%"></div>
	<br>

<div id="form">
  <form action="info.php">
   <table align="center">

    <tr><td>
    </td>

    <tr><td>
    <label for="name">Name/email (opt)</label>
    <input type="text" id="name" name="name" placeholder="First, Last / abc@xyz.com"> 
    </td>
    <td>
    <label for="age">Age Group*</label>
    <select id="age" name="age">
      <option value="blank"> (select one) </option>
      <option value="teen">Teen (10-20)</option>
      <option value="youth">Youth (20-30)</option>
      <option value="adult">Adult (30-45)</option>
      <option value="senior">Senior (45-60)</option>
      <option value="supersenior">Veteran (60+)</option>
      <option value="other">Other (NA)</option>
    </td></tr>

    <tr><td>
    <label for="location"><b>Location*</b></label>
    <input type="text" id="location" name="location" placeholder="Town, State, Country"> 
    </td>
    <td>
    <label for="sex">Sex*</label>
    <select id="sex" name="sex">
      <option value="blank">(select one)</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
      <option value="NA">Decline</option>
    </select></td></tr>

    <tr><td>
    <label for="category">Sector*</label>
    <select id="category" name="category">
      <option value='blank'>(select one)</option>
      <option value='general'>General</option>
      <option value='health'>Health</option>
      <option value='education'>Education</option>
      <option value='water'>Water</option>
      <option value='economic'>Economic</option>
      <option value='governence'>Governence</option>
      <option value='social'>Social</option>
      <option value='cultural'>Cultural</option>
      <option value='environment'>Environmental</option>
      <option value='housing'>Housing</option>
      <option value='laworder'>Law and Order</option>
      <option value='malnourishment'>Malnourishment</option>
      <option value='agrarian'>Agrarian</option>
      <option value='industrial'>Industrial</option>
      <option value='other'>Other</option>
    </select></td>
    <td>
    <label for="sentiment">Sentiment*</label>
    <select id="sentiment" name="sentiment">
      <option value='blank'>(select one)</option>
      <option value="positive">Positive</option>
      <option value="negative">Negative</option>
      <option value="neutral">Neutral</option>
      <option value="other">Other</option>
    </select></td></tr>
    </td>
    </tr>

    <tr><td colspan="2">
    <label for="pulse"><b>*Unempolyment Info:</b></label>
    <textarea id="pulse" name="pulse" placeholder="Enter your pulse info here ..." style="height:50px"></textarea>
    </td> </tr>
    <br><br>
    <tr><td colspan="2" align="center">
    <input type="submit" value="Submit"></td></tr>

   </table>
  </form>
</div>

	<br><br>

<style>
span {
  display: inline-block;
  padding: 6px 6px 4px;
  border-radius: 3px;
  background: #b09dc4;
  margin-right: -2px;
}
.center {
  text-align: center;
  width: 50%;
  margin: 20px auto;
}
.message {
  color: #ccc6e3;
  font-family: Verdana;
  font-size: 12px;
</style>

        <br><br>
	<footer>&copy; NRUinfo org </footer>
        <br>

<?php
include_once "includes/track.php"; 


?>







    <script>
      var map;
      var marker;
      var infowindow;
      var messagewindow;

      function initMap() {
        var california = {lat: 37.4419, lng: -122.1419};
        var map_ctr = {lat: 23, lng: 80};
        map = new google.maps.Map(document.getElementById('map'), {
          center: map_ctr,
          zoom: 5.0
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


