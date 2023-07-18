<?php require 'config.php';?>
<?php
		
		if(isset($_POST['submitBtn'])){ 

			echo "Full name : " . $_POST['name']. "<br>";
			echo "Email : " . $_POST['email']. "<br>";
			echo "Contact Number : " . $_POST['mobile']. "<br>";
			echo "NIC Number : " . $_POST['NIC']. "<br>";
			echo "Check In : " . $_POST['checkIn']. "<br>";
			echo "Check Out : " . $_POST['checkOut']. "<br>";
			echo "Remarks : " . $_POST['comment']. "<br>";
		}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reserved Details</title>
</head>
<body>
	<h1>Reservation Details</h1>
	
</body>
</html>