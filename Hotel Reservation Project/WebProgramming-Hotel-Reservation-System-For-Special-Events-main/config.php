<?php
	//The connection object
	$con =mysqli_connect("localhost","root","","hotel");

	// Check connection
	if($con->connect_error){
		die("Connection failed: " . $con->connect_error);
	}
?>