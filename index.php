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

 <!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="" class="active">Home</a>
  </div>

  <!-- Left-aligned links (default) -->
  <a href="pulse.php">Pulse</a>
  <a href="dir.php">Directory</a>

  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
  </div>

</div> 

	  <br><br>

	  <center>
		   <font size="100" face="georgia">Pulse: A Social Infographic Platform</font>

	  <br><br>
<?php
    if($_GET['msg'])
    { ?>
<div class="container">
    <p> <b>
    <font face="georgia" color="blue">
    Thank you for submitting your pulse info!
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
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="First, Last"> 
    </td>
    <td>
    <label for="age">Age</label>
    <input type="text" id="age" name="age" placeholder="in years"> 
    </td></tr>

    <tr><td>
    <label for="location">Location*</label>
    <input type="text" id="location" name="location" placeholder="Town, State, Country"> 
    </td>
    <td>
    <label for="sex">Sex</label>
    <select id="sex" name="sex">
      <option value="other"> </option>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select></td></tr>

    <tr><td colspan="2">
    <label for="category">Category</label>
    <select id="category" name="category">
      <option value='blank'> </option>
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
    </select></td></tr>

    <tr><td colspan="2">
    <label for="pulse"><b>*Pulse Info:</b></label>
    <textarea id="pulse" name="pulse" placeholder="Write your pulse info here..." style="height:40px"></textarea>
    </td> </tr>

    <tr><td>
    <input type="submit" value="Submit"></td></tr>

   </table>
  </form>
</div>


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


