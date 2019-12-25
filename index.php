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
  <a href="dir.php"><div class="w3-xxlarge"><i class="fa fa-bar-chart"></i></div></a>
  <a href="cloud.php"><div class="w3-xxlarge"><i class="fa fa-eye"></i></div></a>
  <a href="pulse.php"><div class="w3-xxlarge"><i class="fa fa-location-arrow"></i></div></a>

  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="contest.php"><div class="w3-xxlarge"><i class="fa fa-tasks"></i></div></a>
    <a href="contact.php"><div class="w3-xxlarge"><i class="fa fa-envelope"></i></div></a>
    <a href="about.php"><div class="w3-xxlarge"><i class="fa fa-users"></i></div></a>
  </div>

</div> 

	  <br><br>

	  <center>
		   <font size="100" face="georgia"><font color="darkviolet"><b>NRU:</b></font> <u>N</u>ational <u>R</u>egistry of <u>U</u>nemployment</font>

    <center>
   <br>
    <font face="georgia" color="black" size="6">
    <b>
      People’s Initiative to Document Every Unemployed Person of the Country!
    </b>
    </font>
    </center>
	  <br><br>
<?php
    if($_GET['msg'] == "success")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="green" size="6">
    Thank you for submitting your info! <font size="8"><i class="fa fa-smile-o"></i></font>
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
    Please submit your info with a location! <font size="8"><i class="fa fa-frown-o"></i></font>
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
    if($_GET['msg'] == "errstate")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="red" size="6">
    Please select your state! <font size="8"><i class="fa fa-frown-o"></i></font>
    </font>
    </b>
    </p>
</div>
<?php }
?>

<?php
    if($_GET['msg'] == "errsector")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="red" size="6">
    Please select your sector! <font size="8"><i class="fa fa-frown-o"></i></font>
    </font>
    </b>
    </p>
</div>
<?php }
?>

<?php
    if($_GET['msg'] == "errdurection")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="red" size="6">
    Please select applicable unemployment duration! <font size="8"><i class="fa fa-frown-o"></i></font>
    </font>
    </b>
    </p>
</div>
<?php }
?>



<?php
    if($_GET['msg'] == "errgender")
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
    if($_GET['msg'] == "errqualification")
    { 
?>
<div class="container">
    <p> <b>
    <font face="georgia" color="red" size="6">
    Please select an apporopriate qualification! <font size="8"><i class="fa fa-frown-o"></i></font>
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
    <label for="name">Name (optional)</label>
    <input type="text" id="name" name="name" placeholder="First, Last"> 
    </td>
    <td>
    <label for="age">*Age Group (in years)</label>
    <select id="age" name="age">
      <option value="blank"> (select one) </option>
      <option value="below_10"><10</option>
      <option value="year_15">11-15</option>
      <option value="year_20">16-20</option>
      <option value="year_25">21-25</option>
      <option value="year_30">26-30</option>
      <option value="year_35">31-35</option>
      <option value="year_40">36-40</option>
      <option value="year_45">41-45</option>
      <option value="year_50">46-50</option>
      <option value="year_55">51-55</option>
      <option value="year_60">56-60</option>
      <option value="year_65">61-65</option>
      <option value="year_70">66-70</option>
      <option value="year_70+">70+</option>
    </td></tr>

    <tr><td>
    <label for="phone">Phone (optional)</label>
    <input type="text" id="phone" name="phone" placeholder="+91..."> 
    </td>
    <td>
    <label for="email">Email (optional)</label>
    <input type="text" id="email" name="email" placeholder="abc@xyz.com"> 
    </td></tr>


    <tr><td>
    <label for="qualification">*Qualification</label>
    <select id="qualification" name="qualification">
      <option value='blank'>(select one)</option>
      <option value="primary">Primary</option>
      <option value="middleschool">Middle School</option>
      <option value="highschool">High School</option>
      <option value="hrsecschool">Higher Secondary</option>
      <option value="diploma">Diploma</option>
      <option value="graduate">Graduate</option>
      <option value="postgraduate">Postgraduate</option>
      <option value="doctorate">Doctorate</option>
      <option value="other">Other</option>
    </select></td>
    </td>
    <td>
    <label for="gender">*Gender</label>
    <select id="gender" name="gender">
      <option value="blank">(select one)</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
      <option value="NA">Decline</option>
    </select></td></tr>


    <tr><td>
    <label for="location">*Location</label>
    <input type="text" id="location" name="location" placeholder="Village, Town or City"> 
    </td>
    <td>
    <label for="state">*State</label>
    <select id="state" name="state">
      <option value="blank">(select one)</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu Kashmir">Jammu Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharastra">Maharastra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Odisha">Odisha</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Telangana">Telangana</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="Uttarakhand">Uttarakhand</option>
      <option value="West Bengal">West Bengal</option>

      <option value="Andaman Nicobar">Andaman Nicobar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Dadra Nagar Haveli">Dadra Nagar Haveli</option>
      <option value="Daman Diu">Daman Diu</option>
      <option value="Lakshadweep">Lakshadweep</option>
      <option value="NCT Delhi">NCT Delhi</option>
      <option value="Puducherry">Puducherry</option>

    </select></td></tr>


    <tr><td>
    <label for="sector">*Sector</label>
    <select id="sector" name="sector">
      <option value='blank'>(select one)</option>
      <option value='agriculture'>Agriculture</option>
      <option value='automobile'>Automobile & Transport</option>
      <option value='education'>Education</option>
      <option value='engineering'>Engineering</option>
      <option value='government'>Government</option>
      <option value='healthcare'>Healthcare</option>
      <option value='hospitality'>Hospitality</option>
      <option value='information technology'>Information Technology</option>
      <option value='realstate'>Real State & Housing</option>
      <option value='semigovernment'>Semi Government</option>
      <option value='private'>Private</option>
      <option value='laworder'>Law and Order</option>
      <option value='legal'>Legal and Consulting</option>
      <option value='unorganized'>Unorganized</option>
      <option value='other'>Other</option>
    </select></td>
    <td>
    <label for="duration">*Unemployment duration</label>
    <select id="duration" name="duration">
      <option value='blank'>(select one)</option>
      <option value="months_3">0-3 months</option>
      <option value="months_6">3-6 months</option>
      <option value="months_9">6-9 months</option>
      <option value="months_12">9-12 months</option>
      <option value="year_2">1-2 years</option>
      <option value="year_3">2-3 years</option>
      <option value="year_4">3-4 years</option>
      <option value="year_5">4-5 years</option>
      <option value="year_10">5-10 years</option>
      <option value="year_10+">10+ years</option>
      <option value="other">Other</option>
    </select></td></tr>
    </td>
    </tr>

    <tr><td colspan="2">
    <label for="extrainfo">Additional Information</label>
    <textarea id="extrainfo" name="extrainfo" placeholder="Enter your additional unemployment info here, including when were you employed last ..." style="height:100px"></textarea>
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjtZ5hjA0B6feyeND5hcQ6E9R65s2z_YU&callback=initMap">
    </script>
  </body>
</html>


