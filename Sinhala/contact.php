<!DOCTYPE html>
<html>
<head>
	<title>Contact page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/public.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<style type="text/css">
		body{
             background-image: url("img/new.jpg"); }
	    </style>
</head>
	<?php include("navbar/navbar.php") ?>

<body>
<div>
<img src="img/contact-us-top.jpg" usemap="#image-map" width="100%">

	
<map id="map" name="image-map">
    <area id="img" target="" alt="අපිට ලිපියක් එවන්න" title="අපිට ලිපියක් එවන්න" href="contactforum.php" coords="157, 215, 388, 470" shape="rect">
    <area target="" alt="Call us" title="අප අමතන්න" href="" coords="402, 180, 558, 436" shape="rect">
    <area target="" alt="Send us an Email" title="අපට ඊමේල් කරන්න" href="" coords="565, 203, 790, 462" shape="rect">
    <area target="" alt="Send us an SMS" title="අපට කෙටි පණිවුඩයක් එවන්න" href="" coords="793, 162, 942, 419" shape="rect">
    <area target="" alt="Meet Us" title="අපව හමු වන්න" href="" coords="963, 195, 1188, 452" shape="0">
</map>
</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("kk");
    popup.classList.toggle("show");
}
</script>
<br> <br>

 <div class="row">
    <div class="col-sm-4"> <img align="center" src="img/msg.png" height="100px" width="100px" style="margin-left: 100px;" > <a href="contactforum.php"> <h3 align="center"> අපට කෙටි පණිවුඩයක් එවන්න </h3> </a></div>

    <div class="col-sm-4"> <img src="img/call.png" height="100px" width="100px" align="center"> <h3><b>ක්ෂණික ඇමතුම ඔස්සේ අප අමතන්න :</b> 0112 223803</h3></div>

    <div class="col-sm-4" > <img src="img/email.png" height="100px" width="100px" align="center"> <h3> <b> අපට ඊමේල් කරන්න :</b> e.saru@gmail.com</h3></div>
  </div>
  <br> <br>



</body>
</html>