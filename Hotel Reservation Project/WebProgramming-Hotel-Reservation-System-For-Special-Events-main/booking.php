
<?php require 'config.php';?>
<?php

	// checking if a user is logged in
	// if (!isset($_SESSION['userId'])) {
	// 	header('Location: login.php');
	// }

	if (isset($_POST['submitBtn'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['mobile'];
		$nic = $_POST['NIC'];
		$checkIn = $_POST['checkIn'];
		$checkOut = $_POST['checkOut'];
		$comment = $_POST['comment'];
	

		$sql = "INSERT INTO hotel(name, email, contact, nic, checkIn, checkOut, comment) VALUES('$name', '$email', '$contact', '$nic', '$checkIn', '$checkOut', '$comment')";

		if ($con->query($sql)) {
			echo '<script>alert("Reservation Successfully.")</script>';
			header('Location:index.php');
		}
		else{
			echo "error.".$con->error;
		}
		
	}
	mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/book.css">
	<script src="js/book.js"></script>
	<title>Booking</title>
</head>
<body>
	<!-- background="images/booking5.jpg" -->
	<!-- header -->
	<?php include_once('header.php'); ?>
	<div class="book">
	<h1 class="head" align="center">Reservations</h1>
	

	<div class="form">
	<center>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
			<p class="p">
				<label for="">Full Name :    </label>
				<input type="text" name="name"><br>
			</p><br>
		
			<p class="p">
				<label for="">Email :   </label>
				<input type="email" name="email" placeholder="abc@gmail.com" pattern = "[a-z 0-9._%+-]+@[a-z 0-9.-]+\.[a-z]{2,3}" required><br>
			</p><br>
		
			<p class="p">
				<label for="">Contact Number :    </label>
				<input type = "phone" name = "mobile"  placeholder  = "1234567890" required><br>
			</p><br>

			<p>
				<label for="">NIC :   </label>
				<input type = "text" name = "NIC" placeholder  = "200117002126" required><br>
			</p><br>
		
			<p class="p">
				<label for="">Check In :   </label>
				<input type="date" name="checkIn"><br>
			</p><br>
		
			<p class="p">
				<label for="">Check Out :   </label>
				<input type="date" name="checkOut"><br>
			</p><br>
		
			<p class="p">
				<label for="">Special Remarks :     </label><br><br>
				<textarea name="comment" id="" cols="60" rows="10" style="resize: none;"></textarea><br>
			</p>
			<br>
			
			<input type="checkbox" class="input style" id="checkBox" onclick="enablebutton(this)" value="1">I agree to the terms and conditions and privacy policy.<br/><br/>

			<input type ="submit" id="submitBtn" value="submit" name="submitBtn" disabled>
		</form>
		
	</center>
	</div>
	</div>
	<br>
	<!-- header -->
	<?php require_once('footer.php'); ?>
</body>
</html> 
