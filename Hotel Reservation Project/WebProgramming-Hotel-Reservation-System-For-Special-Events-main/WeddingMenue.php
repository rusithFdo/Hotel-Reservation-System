<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/Menu.css">
	<title>Wedding Menus</title>
</head>
<body>
	<!-- header -->
	<?php include_once('header.php'); ?>

	<div class="lineFirst">
		<div class="line-items">
			<div class="square" id="square1">
				<p class="p1">Silver menu</p>
				<button class="menuBtn" onclick="window.open('document/silver.pdf', '_blank');">More Details</button>
			</div>
			<img src="images/wedding.jpg" alt="" width="450px" height="400px">
		</div>
		<div class="line-items">
			<h1 class="head">Wedding Menus</h1>
		</div>
		<div class="line-items">
			<div class="square" id="square2">
				<p class="p1">Bronze menu</p>
				<button class="menuBtn" onclick="window.open('document/Bronze.pdf', '_blank');">More Details</button>
			</div>
			<img src="images/hotel14.jpg" alt="" width="450px" height="400px">

		</div>
	</div>

	<div class="lineSecond">
		<div class="line-items">
			<div class="square" id="square3">
				<p class="p1">Gold menu</p>
				<button class="menuBtn" onclick="window.open('document/silver.pdf', '_blank');">More Details</button>
			</div>
			<img src="images/hotel15.jpg" alt="" width="450px" height="400px">
		</div>
		<div class="line-items">
			<div class="square" id="square4">
				<p class="p1">Platinum menu 1</p>
				<button class="menuBtn" onclick="window.open('document/silver.pdf', '_blank');">More Details</button>
			</div>
			<img src="images/hotel16.jpg" alt="" width="450px" height="400px">
		</div>
		<div class="line-items">
			<div class="square" id="square5">
				<p class="p1">platinum menu 2</p>
				<button class="menuBtn" onclick="window.open('document/silver.pdf', '_blank');">More Details</button>
			</div>
			<img src="images/hotel17.jpg" alt="" width="450px" height="400px">
		</div>
	</div>

	<div class="lineThird">
		<img class="img" src="images/image15.jpg" alt="" width="500px" height="300px" align="right">
		<div class="other-charges">
			<h2 class="other">OTHER CHARGES</h2>
			<ul class="order">
				<li>Full Ballroom Draping (Black / White): Rs. 120,000/-</li>
				<li>The Ballroom is provided for a maximum duration of five (5) hours. Should you need to use the venue for more than the time allocated by the hotel, an additional charge of Rs. 50,000/- nett per hour will apply (on availability only and at the discretion of the management).</li>
				<li>Kindly note that Rs. 50, 000/= from the initial deposit will be refunded after one week of the function if there are no damages to hotel property.</li>
				<li>Screen and Projector</li>
				<li>If guest needs to decorate the public areas(Foyer area) from the florist,it can be done at a additional cost.(starting rate is LKR25,000/- and depend on the setup)</li>
				<li>Milk Rice Platter</li>
			</ul>
		</div>
	</div>

	<div class="lineFourth">
		<img class="img" src="images/image16.jpg" alt="" width="500px" height="350px" align="left">
		<div class="addservice">
			<h2 class="add">ADDITIONAL SERVICES</h2>
			<ul class="order">
			<li>Fully Air Conditioned Ballroom</li>
			<li>International Cuisine</li>
			<li>Buffet style</li>
			<li>Table for Registration & Gift</li>
			<li>Photography locations within the Hotel including the pool area on the day of the function</li>
			<li>Fresh juice as welcome drinks</li>
			<li>Corkage is offered free of charge for hard liquor</li>
			<li>Child below 5 years is complimentary</li>
			<li>Our lighting system can be changed to many colors match your theme</li>
			<li>Microphones including Cordless and Podium</li>
			<li>A complimentary overnight stay with the breakfast for the couple at Deluxe Room decorated with romantic set up and amenities (Please note that, this guaranteed number exceeds 200 pax will upgrade for the half board)</li>
			<li>A bottle of sparkling wine, fruit basket, chocolate platter and cake</li>
			<li>Beer / soft drinks need to buy from the hotel (No home- made Wine Allowed)</li>
			<li>Dry bites (only Mixtures, Cashew & Green Apple) can bring from outside but cooked bites need to order from the hotel</li>
			<li>Child below 5 years is complimentary</li>
		</ul>
		</div>
	</div>
	<!-- Footer -->
<?php require_once('footer.php'); ?>
</body>
</html>

