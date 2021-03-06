<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>nruinfo.org</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
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
  <a href="" class="active"><div class="w3-xxlarge"><font color="darkviolet"><i class="fa fa-location-arrow"></i></font></div></a>

  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="contest.php"><div class="w3-xxlarge"><i class="fa fa-tasks"></i></div></a>
    <a href="contact.php"><div class="w3-xxlarge"><i class="fa fa-envelope"></i></div></a>
    <a href="about.php"><div class="w3-xxlarge"><i class="fa fa-users"></i></div></a>
  </div>

</div> 

<?php
include_once "includes/track.php";
$v_loc = ip_info("Visitor", "city");
$v_url = "https://www.nruinfo.org/location.php?loc=";
?>

	  <br><br>

	  <center>
	  <font size="100" face="georgia">Your Location: <font color="darkviolet"><b><?php echo $v_loc ?></b></font> </font>
	   </center>
	  <br><br>
    <div id="map"></div>



<div class="container">
    <p> <b>
    <font face="georgia" color="green">
    <?php
    echo "Location: ".ip_info("Visitor", "Address");
    ?>
    </font>
    <font face="georgia" color="blue">
    <?php
    echo "<br><br>";
    echo "IP Address: ".ip_info("Visitor", "ipaddr");
    ?>
    </font>
    </b>
    </p>
</div>


        <br><br>
	<footer>&copy; NRUinfo org </footer>
        <br>

     <script>
           // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 37, lng: -121},
          zoom: 9
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

	    var marker = new google.maps.Marker({
	    	position: pos,
		map: map,
		draggable: true,
		animation: google.maps.Animation.DROP,
		url: "<?php echo $v_url.$v_loc?>", 
		title:"You!"
	    });

	    marker.addListener('click', toggleBounce);

	    function toggleBounce() {
  		if (marker.getAnimation() !== null) {
    			marker.setAnimation(null);
  		} else {
			marker.setAnimation(google.maps.Animation.BOUNCE);
			setTimeout(function(){ marker.setAnimation(null); }, 750);
  		}
	    }

        marker.addListener('click', function() {
          map.setZoom(8);
          map.setCenter(marker.getPosition());
        });


    google.maps.event.addListener(marker, 'click', function() {
        window.location.href = this.url;
    });

	    //infoWindow.setPosition(pos);
            //infoWindow.setContent('You!');
            //infoWindow.open(map);
	    map.setCenter(pos);

          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }



    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjtZ5hjA0B6feyeND5hcQ6E9R65s2z_YU&callback=initMap">
    </script>
  </body>
</html>



