<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/style1.css">
	<!-- <link rel="stylesheet" href="styles/footer.css"> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" link rel="stylesheet"> -->
	<!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<script src="js/HomePage.js"></script>
	
	<title>Home</title>
</head>
<body>
	<!-- header -->
	<?php include_once('header.php'); ?>

<!-- image slider show -->
<img name="slide" width="100%" height="800">

<center>
	<img src="images/image11.jpg" alt="" width="365px" height="200px">
	<img src="images/image15.jpg" alt="" width="365px" height="200px">
	<img src="images/image7.jpg" alt="" width="365px" height="200px">
	<img src="images/image16.jpg" alt="" width="365px" height="200px">
	<img src="images/img-1.jpg" alt="" width="300px" height="200px">
	<img src="images/image23.png" alt="" width="275px" height="200px">
	<img src="images/image12.jpg" alt="" width="275px" height="200px">
	<img src="images/image8.jpg" alt="" width="300px" height="200px">
	<img src="images/image24.jpg" alt="" width="300px" height="200px">
</center>

<!-- slider buttons -->
<div style="text-align: center;" name="dot">
	<span class="dot"></span>
	<span class="dot"></span>
	<span class="dot"></span>
</div>
<br><br><br>
<h1>WELCOME !</h1><br><br>
<p align="center" style="font-family: Calibri; font-size: 20px;">Situated in the Serene Suburbs of <br>Colombo Hotel Pepper's Grand Offers the Best in Banquet <br>and Accommodation Services</p>
<div class="line"></div>
<div class="para">
	<div class="para">
		<p class="pp" id="p1">
			<span><b>Wedding Event</b></span><br><br>From elegant halls to <br>delicious cuisine to Free decorations and <br> a heap of other services <br> We are the one stop shop for all your wedding needs. <br><br>
			<button class="menuBtn" onclick="window.open('wedding.php')";>See More</button>
		</p>
		<p class="pp" id="p2">
			<span><b>Corporate Functions</b></span><br><br>Whether it's a conference, <br>corporate party or annual general meeting, <br>PEPPER'S GRAND has unique and <br>varied venues to <br> accommodate your requirement.  <br><br>
			<button class="menuBtn" onclick="window.open('business.php')";>See More</button>
		</p>
		<p class="pp" id="p3">
			<span><b>Other Events</b></span><br><br>Planning a Bday Party? <br>A Batch Party? <br>or a big company event?<br> We have the perfect venues, food & rates to suit all your custom needs.  <br><br>
			<button class="menuBtn" onclick="window.open('socialEvents.php')";>See More</button>
		</p>
	</div>
</div>

<!-- Google Map Add -->

<div class="mapouter">
	<div class="gmap_canvas">
		<iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=goal%20face%20ho&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
		</iframe>
	</div>
</div>

<!-- Footer -->
<?php require_once('footer.php'); ?>
</body>
</html>
