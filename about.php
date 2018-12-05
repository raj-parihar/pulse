<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>pulse.fyi</title>
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
	  </div>

	  <br><br>


 <!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="index.php">Home</a>
  </div>

  <!-- Left-aligned links (default) -->
  <a href="pulse.php">Pulse</a>
  <a href="dir.php">Directory</a>
  <a href="cloud.php">Cloud</a>


  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="contact.php" >Contact</a>
    <a href="" class="active">About</a>
  </div>

</div> 

	  <br><br>

	  <center>
		   <font size="50" face="georgia">About Us</font> 
	  <br><br>

	   </center>

<div class="textbox">
	  <br><br>
	  <h1>
	   <font face="georgia">Mission</font> 
	  <br>
	  </h1>
	  To provide socioecominic data, trends and insights across various geographical locations ...
	  <br><br>
	  <br><br>


	  <h1>
	   <font face="georgia">Team</font> 
	  <br>
	  </h1>
	  A bunch of dedicated individuals who believe in democratizing access to information ...
	  <br><br>
	  <br><br>
	  <br><br>
	  <br><br>

</div>

    <!---div id="message">Pulse info saved!</div--->
        <br><br>
	<footer>&copy; Copyright 2018 Pulse Infographics </footer>
        <br>

  </body>
</html>

