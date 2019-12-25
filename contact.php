<!DOCTYPE html >
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


    </style>
  </head>
  <body>
	  <div>
	  <img src="pulse_logo.png" alt="Pulse Infographics" style="max-width:128px; max-height:128px;" align="right">
	  </div>

	  <br><br>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="index.php" ><div class="w3-xxxlarge"><i class="fa fa-home"></i></div></a>
  </div>

  <!-- Left-aligned links (default) -->
  <a href="dir.php"><div class="w3-xxlarge"><i class="fa fa-globe"></i></div></a>
  <a href="cloud.php"><div class="w3-xxlarge"><i class="fa fa-cloud"></i></div></a>
  <a href="pulse.php"><div class="w3-xxlarge"><i class="fa fa-heartbeat"></i></div></a>


  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="contest.php"><div class="w3-xxlarge"><i class="fa fa-trophy"></i></div></a>
    <a href="" class="active"><div class="w3-xxlarge"><font color="darkviolet"><i class="fa fa-envelope"></i></font></div></a>
    <a href="about.php"><div class="w3-xxlarge"><i class="fa fa-users"></i></div></a>
  </div>

</div> 

	  <br><br>

	  <center>
		   <font size="50" face="georgia">Contact Us</font> 
	   </center>


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

<?php

    if($_GET['msg'])
    { ?>
<div class="container">
    <p> <b>
    <font face="georgia" color="green">
    Message has been sent successfully.
    We will get back to you soon. Thank you!
    </font>
    </b>
    </p>
</div>

<?php }

 ?>

<div class="container">
  <form action="action.php">

    <label for="subject">Subject</label>
    <select id="subject" name="subject">
      <option value="feedback">Feedback/comments/suggestions</option>
      <option value="volunteer">Volunteering</option>
      <option value="inquiry">General inquiry</option>
      <option value="others">Others</option>
    </select>

    <label for="name">Name*</label>
    <input type="text" id="name" name="name" placeholder="First, Last">

    <label for="email">Email*</label>
    <input type="text" id="email" name="email" placeholder="abc@xyz.com">

    <label for="location">Location</label>
    <input type="text" id="location" name="location" placeholder="Town, State, Country">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write your message/comments here..." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>




        <br><br>
        <br><br>
	<footer>&copy; NRUinfo org </footer>
        <br>

  </body>
</html>


