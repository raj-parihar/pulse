<!DOCTYPE html >
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


    </style>
  </head>
  <body>
	  <div>
	  <img src="pulse_logo.png" alt="Pulse Infographics" style="max-width:128px; max-height:128px;" align="right">
	  </div>

	  <br><br>


 <!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="" class="active">Home</a>
  </div>

  <!-- Left-aligned links (default) -->
  <a href="vol.php">Volunteer</a>
  <a href="dir.php">Directory</a>

  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="contact.php">Contact</a>
    <a href="about.html">About</a>
  </div>

</div> 

	  <br><br>

	  <center>
		   <font size="100" face="georgia">Pulse: A Social Infographic Platform</font> 
	   </center>
	  <br><br>

    <div id="map" height="460px" width="100%"></div>
        <br>
    <div id="form">
      <table align="center">
      <tr><td>Name:</td> <td><input size="20" type='text' id='name'/> </td> 
	      <td>Location:</td> <td><input size="15" type='text' id='address'/> </td></tr> 
	      <td>Age:</td> <td><input size="5" type=number' id='age'/> </td>
              <td>Sex:</td> <td><select id='sex'> +
                 <option value='other' SELECTED> </option>
                 <option value='male'>Male</option>
                 <option value='female'>Female</option>
	         </select> </td>
       <tr><td>Category:</td> <td><select id='sex'> +
                 <option value='general' SELECTED>General</option>
                 <option value='health'>Health</option>
                 <option value='education'>Education</option>
                 <option value='water'>Water</option>
		 <option value='economic'>Economic</option>
		 <option value='governence'>Governence</option>
		 <option value='social'>Social</option>
		 <option value='environment'>Environmental</option>
		 <option value='other'>Other</option>
	         </select> </td> 

	      <td><b>Pulse info:</b></td> <td><input size="40" type='text' id='pulse'/> </td> 
                 <td></td><td><input type='button' value='Submit' style="font-size:11pt;color:white;background-color:green;border:2px solid #336600;padding:3px;border-radius:12px;" onclick='saveData()'/></td></tr>
      </table>
    </div>
    <div id="message">Pulse info saved!</div>
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


