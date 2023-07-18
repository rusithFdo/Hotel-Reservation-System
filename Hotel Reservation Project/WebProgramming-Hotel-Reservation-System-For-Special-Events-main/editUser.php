
<?php require 'config.php';?>
<?php

	//checking if a admin is logged in
	// if (!isset($_SESSION['id'])) {
	// 	header('Location: adminLogIn.php');
	// }
	
	if (isset($_GET['ID'])) {
		$ID = $_GET['ID'];
	}else{
     	$ID ="";
	}

	$sql = "SELECT * FROM hotel WHERE ID = '$ID'";
	$result=$con->query($sql);
	$row = $result->fetch_assoc();
	if(empty($row)){
		$name = "";
		$email ="";
		$contact ="";
		$nic = "";
		$checkIn = "";
		$checkOut = "";
		$comment = "";
	}else{
		$name = $row['name'];
		$email =$row['email'];
		$contact =$row['contact'];
		$nic = $row['nic'];
		$checkIn = $row['checkIn'];
		$checkOut = $row['checkOut'];
		$comment = $row['comment'];

	 }

	if (isset($_POST['updateBtn'])) {
		
		$name = $_POST['name'];
		$ID = $_POST['ID'];
		$email = $_POST['email'];
		$contact = $_POST['mobile'];
		$nic = $_POST['NIC'];
		$checkIn = $_POST['checkIn'];
		$checkOut = $_POST['checkOut'];
		$comment = $_POST['comment'];
	

		$sql = "UPDATE hotel SET name = '$name', email = '$email', contact = '$contact', nic = '$nic', checkIn =  '$checkIn', checkOut = '$checkOut', comment = '$comment' WHERE ID='$ID'";
		$result = mysqli_query($con, $sql);
		if ($result==TRUE) {
			echo '<script>alert("Update Successfully.")</script>';
			header('Location:userDetails.php');
		}
		else{
			echo "error.".$con->error;
		}
		
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
				<input type="text" name="name" value=<?php echo $name ?>><br>
			</p><br>
		
			<p class="p">
				<label for="">Email :   </label>
				<input type="email" name="email" placeholder="abc@gmail.com" pattern = "[a-z 0-9._%+-]+@[a-z 0-9.-]+\.[a-z]{2,3}" required  value=<?php echo $email ?>><br>
			</p><br>
		
			<p class="p">
				<label for="">Contact Number :    </label>
				<input type = "phone" name = "mobile"  placeholder  = "1234567890" required value=<?php echo $contact ?>><br>
			</p><br>

			<p>
				<label for="">NIC :   </label>
				<input type = "text" name = "NIC" placeholder  = "200117002126" required value=<?php echo $nic ?>><br>
			</p><br>
		
			<p class="p">
				<label for="">Check In :   </label>
				<input type="date" name="checkIn" value=<?php echo $checkIn ?>><br>
			</p><br>
		
			<p class="p">
				<label for="">Check Out :   </label>
				<input type="date" name="checkOut" value=<?php echo $checkOut ?>><br>
			</p><br>

				<input type="hidden" name="ID" value="<?php  echo $ID; ?>">
		
			<p class="p">
				<label for="">Special Remarks :     </label><br><br>
				<textarea name="comment" id="" cols="60" rows="10" style="resize: none;" value=<?php echo $comment ?>></textarea><br>
			</p>
			<br>
			
			<input type="checkbox" class="input style" id="checkBox" onclick="enablebutton(this)" value="1">I agree to the terms and conditions and privacy policy.<br/><br/>

			<input type ="submit" id="submitBtn" value="Update" name="updateBtn" disabled>
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