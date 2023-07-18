<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" link rel="stylesheet">
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<title>header</title>
</head>
<body>
	<header>
	<br>	
	<center>
		<a href="index.php"><img src="images/logo3.png" alt="Pepper's Grand Hotel" style="cursor: pointer; position: relative"></a>
		<a href="AdminLogIn.php"><img src="images/profile.png" alt="Admin LogIn" title="Admin Log In" style="cursor: pointer; width: 50px;
		height: 50px; float: right; position: relative; right: 2%;"></a>
		<!-- <button style="position: relative; right: -40%; top: 15%; background-color: red; color: white; padding: 5px; cursor: pointer;" onclick="window.open('adminLogIn.php')";>Admin LogIn</button> -->
		<!-- <button style="position: relative; left: 31%; top: 15%; background-color: green; color: white; padding: 5px; cursor: pointer;" onclick="window.open('register.php')";>Register</button> -->
		

	</center>
	
	
	<center>
		<div class="dropdown">
		<nav>
			<input type="checkbox" id="check">
				<label for="check" class="checkbutton">
					<i class="fas fa-bars" style="padding-left: 5px; margin: 5px;"></i>
				</label>
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Events   <i class="fa fa-caret-down"></span></i></a>
				<ul>
					<li><a href="Wedding.php">Wedding Events</a></li>
					<li><a href="business.php">Business Events</a></li>
					<li><a href="socialEvents.php">Social Events</a></li>
				</ul>
			</li>
				<li><a href="offer.php">Offers</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		</div>
	</center>
<br><br>
</header>