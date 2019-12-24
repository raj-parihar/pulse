<!DOCTYPE html>
 <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>nruinfo.org</title>
    <style>
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
.textbox {
    margin-left: 100px;
}
    </style>
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
  </head>
  <body>
          <div>
          <img src="pulse_logo.png" alt="Pulse Infographics" style="max-width:128px; max-height:128px;" align="right">
          </div> <br>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 <!-- Top navigation -->
<div class="topnav">
  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="index.php"><div class="w3-xxxlarge"><i class="fa fa-home"></i></div></a>
  </div>
  <!-- Left-aligned links (default) -->
  <a href="pulse.php"><div class="w3-xxlarge"><i class="fa fa-heartbeat"></i></div></a>
  <a href="dir.php"><div class="w3-xxlarge"><i class="fa fa-globe"></i></div></a>
  <a href="" class="active"><div class="w3-xxlarge"><font color="darkviolet"><i class="fa fa-cloud"></i></font></div></a>

  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="contest.php"><div class="w3-xxlarge"><i class="fa fa-trophy"></i></div></a>
    <a href="contact.php"><div class="w3-xxlarge"><i class="fa fa-envelope"></i></div></a>
    <a href="about.php"><div class="w3-xxlarge"><i class="fa fa-users"></i></div></a>
  </div>
</div>
          <br><br>
          <center>
                   <font size="50" face="georgia">NRU Info <font color="darkviolet"><b>Cloud</b></font></font>
          <br><br>
           </center>



<meta charset="utf-8">
<title>nruinfo.org</title>
<style>
body {
  position: relative;
  font-family: "Helvetica Neue", sans-serif;
  width: 100%;
  margin: auto;
  margin-bottom: 1em;
  margin-top: 20px;
}
#presets a { border-left: solid #666 1px; padding: 0 10px; }
#presets a.first { border-left: none; }
#keyword { width: 300px; }
#fetcher { width: 500px; }
#keyword, #go { font-size: 1.5em; }
#text { width: 100%; height: 100px; }
#text { width: 0%; height: 0px; }
p.copy { font-size: small; }
#form { font-size: small; position: relative; }
hr { border: none; border-bottom: solid #ccc 1px; }
a.active { text-decoration: none; color: #000; font-weight: bold; cursor: text; }
#angles line, #angles path, #angles circle { stroke: #666; }
#angles text { fill: #333; }
#angles path.drag { fill: #666; cursor: move; }
#angles { text-align: center; margin: 0 auto; width: 350px; }
#angles input, #max { width: 42px; }
</style>


<?php
// Database credentials
$dbHost = 'localhost';
$dbUsername = 'user';
$dbPassword = 'password';
$dbName = 'pulseinfo';
// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// Get data from database
$query_pulse = $db->query("SELECT * FROM pulse");

//echo "$query_pulse";
?>


<center>
<div id="vis"></div>

<form id="form">

<p style="position: absolute; right: 0; top: 0" id="status"></p>

<div style="text-align: center">
  <div id="presets"></div>
  <div id="custom-area">
    <button id="go" type="submit">Change!</button>
    <p><textarea id="text">

      <?php
      if($query_pulse->num_rows > 0){
          while($row = $query_pulse->fetch_assoc()){
		  //echo "['".$row['category']."', ".$row['pulse']."],";
		  //echo $row['sentiment']." ".$row['location']." ";
		  echo $row['category']." ".$row['pulse']." ";
		  //print_r($row);
          }
      }
      ?>

    </textarea>
    <p><label for="text"><b>Customize NRU Cloud</b></label>
  </div>
</div>
</center>

<hr>


<div style="margin-left:50px; margin-right:50px;">

<div style="float: right; text-align: right">
  <p><label for="max">Number of words:</label> <input type="number" value="250" min="1" id="max">
  <p><label for="per-line"><input type="checkbox" id="per-line"> One word per line</label>
  <!--<p><label for="colours">Colours:</label> <a href="#" id="random-palette">get random palette</a>-->
  <p><label>Download:</label>
    <button id="download-svg">SVG</button><!-- |
    <a id="download-png" href="#">PNG</a>-->
</div>

<div style="float: left">
  <p><label>Spiral:</label>
    <label for="archimedean"><input type="radio" name="spiral" id="archimedean" value="archimedean" checked="checked"> Archimedean</label>
    <label for="rectangular"><input type="radio" name="spiral" id="rectangular" value="rectangular"> Rectangular</label>
  <p><label for="scale">Scale:</label>
    <label for="scale-log"><input type="radio" name="scale" id="scale-log" value="log" checked="checked"> log n</label>
    <label for="scale-sqrt"><input type="radio" name="scale" id="scale-sqrt" value="sqrt"> √n</label>
    <label for="scale-linear"><input type="radio" name="scale" id="scale-linear" value="linear"> n</label>
  <p><label for="font">Font:</label> <input type="text" id="font" value="Impact">
</div>

<div id="angles">
  <p><input type="number" id="angle-count" value="5" min="1"> <label for="angle-count">orientations</label>
    <label for="angle-from">from</label> <input type="number" id="angle-from" value="-60" min="-90" max="90"> °
    <label for="angle-to">to</label> <input type="number" id="angle-to" value="60" min="-90" max="90"> °
</div>

<hr style="clear: both">

</div>

</form>


    <!---div id="message">Pulse info saved!</div--->
        <br><br>
        <footer>&copy;NRUinfo org </footer>
        <br><br>
        <footer><font size="2">*Credits: inspired from jasondavies/d3-cloud </font></footer>
        <br>


<script src="js/d3.min.js"></script>
<script src="js/cloud.min.js"></script>
<script>
window.google_analytics_uacct = "UA-54563-3";
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-54563-3']);
_gaq.push(['_trackPageview']);
setTimeout(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
}, 1);
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

