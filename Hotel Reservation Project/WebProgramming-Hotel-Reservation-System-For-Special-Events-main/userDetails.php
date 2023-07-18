<?php session_start(); ?>
<?php require 'config.php';?>
<?php

//checking if a admin is logged in
	if (!isset($_SESSION['id'])) {
		header('Location: adminLogIn.php');
	}

	$userList = '';

	$sql = "SELECT * FROM hotel";

	if($result=$con->query($sql)){
		
		if($result->num_rows > 0){
			echo ("<table border='1'>");

		while($row = $result->fetch_assoc()){
				$userList .= "<tr>";
				$userList .= "<td>" . $row['name']   . "</td>";
				$userList .= "<td>" . $row['email']  . "</td>";
				$userList .= "<td>" . $row['contact']. "</td>";
				$userList .= "<td>" . $row['nic']    . "</td>";
				$userList .= "<td>" . $row['checkIn']. "</td>";
				$userList .= "<td>" . $row['checkOut']. "</td>";
				$userList .= "<td>" . $row['comment']. "</td>";
				$userList .= "<td><a href=\"editUser.php?ID={$row['ID']}\">Update</a></td>";
	 			$userList .= "<td><a href=\"userDelete.php?ID={$row['ID']}\">Delete</a></td>";
	 			$userList .= "</tr>";
			}
			echo ("</table>");
		}else{
			echo "no results";
		}
	}
	else{
		echo "Error:". $con->error;
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UserDetails</title>
	<link rel="stylesheet" href="styles/user.css">
</head>
<body>
	<h1>Reservation Details</h1>
	<header>
	<div class="loggedin">WELCOME <?php echo $_SESSION['firstName'];  ?> <a href="Adminlogout.php">Log Out</a></div>
	</header>
	<main>
	<table class="masterlist">
		<tr>
			<th>Full Name</th>
			<th>Email</th>
			<th>Contact Number</th>
			<th>NIC</th>
			<th>Check In</th>
			<th>Check Out</th>
			<th>Remarks</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>

		<?php echo $userList; ?>

	</table>
	</main>
</body>
</html>