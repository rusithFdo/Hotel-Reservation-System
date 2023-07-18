
<?php require 'config.php';?>
<?php

	// checking if a user is logged in
	// if (!isset($_SESSION['userId'])) {
	// 	header('Location: login.php');
	// }
	
	$ID = $_GET['ID'];

	$sql = "SELECT * FROM hotel WHERE ID = $ID";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	$name = $row['name'];
	$email =$row['email'];
	$contact =$row['contact'];
	$nic = $row['nic'];
	$checkIn = $row['checkIn'];
	$checkOut = $row['checkOut'];
	$comment = $row['comment'];
	
	if (isset($_POST['submitBtn'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['mobile'];
		$nic = $_POST['nic'];
		$checkIn = $_POST['checkIn'];
		$checkOut = $_POST['checkOut'];
		$comment = $_POST['comment'];
	}

	$sql = "SELECT * FROM hotel WHERE ID = $ID";

	if($result=$con->query($sql)){
		
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/book1.css">
	<script src="js/book.js"></script>
	<title>Edit Booking</title>
</head>
<body>
	<!-- background="images/booking5.jpg" -->
	<!-- header -->
	<?php include_once('header.php'); ?>
	<div class="book">
	<h1 class="head" align="center">Update Reservations</h1>
	

	<div class="form">
	<center>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
			<p class="p">
				<label for="">Full Name :    </label>
				<input type="text" name="name" value=<?php echo $name ?> disabled><br>
			</p><br>
		
			<p class="p">
				<label for="">Email :   </label>
				<input type="email" name="email" placeholder="abc@gmail.com" pattern = "[a-z 0-9._%+-]+@[a-z 0-9.-]+\.[a-z]{2,3}" required  value=<?php echo $email ?> disabled><br>
			</p><br>
		
			<p class="p">
				<label for="">Contact Number :    </label>
				<input type = "phone" name = "mobile"  placeholder  = "1234567890" required value=<?php echo $contact ?> disabled><br>
			</p><br>

			<p>
				<label for="">NIC :   </label>
				<input type = "text" name = "NIC" placeholder  = "200117002126" required value=<?php echo $nic ?> disabled><br>
			</p><br>
		
			<p class="p">
				<label for="">Check In :   </label>
				<input type="date" name="checkIn" value=<?php echo $checkIn ?> disabled><br>
			</p><br>
		
			<p class="p">
				<label for="">Check Out :   </label>
				<input type="date" name="checkOut" value=<?php echo $checkOut ?> disabled><br>
			</p><br>
		
			<p class="p">
				<label for="">Special Remarks :     </label><br><br>
				<textarea name="comment" id="" cols="60" rows="10" style="resize: none;" value=<?php echo $comment ?> disabled></textarea><br>
			</p>
			<br>
			
			
			
			<input type ="submit" id="submitBtn" value="Update" name="submitBtn">
			</a>
		</form>
		
	</center>
	</div>
	</div>
	<br>
	<!-- header -->
	<?php require_once('footer.php'); ?>
</body>
</html>
<!-- <?php $con->close();?>
 -->