<?php require 'config.php';?>
<?php  
//checking if the admin is logged
if (!isset($_SESSION['id'])) {
		header('Location: adminLogIn.php');
	}

 if (isset($_GET['ID'])) {
 	// code...
	$ID = $_GET['ID'];
	// sql to delete a record
	$sql = "DELETE FROM hotel WHERE id='$ID';";

	if ($con->query($sql) === TRUE) {
  		echo '<script>alert("Delete Successfully.");</script>';
  		header('Location: userDetails.php');
		} else {
  		echo "Error deleting record: " . $con->error;
	}
}

?>

