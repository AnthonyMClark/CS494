<?php
	//ini_set('display_errors', 1);
	$dbhost = 'oniddb.cws.oregonstate.edu';
	$dbname = 'clarkant-db';
	$dbuser = 'clarkant-db';
	$dbpass = 'PlLhDDtv8g7KlkHW';
	
	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
		or die("Error connecting to database server");
	mysqli_select_db($con, $dbname)
		or die("Error selecting database: $dbname");

	// escape variables for security
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$hair = mysqli_real_escape_string($con, $_POST['hair']);
	$age = mysqli_real_escape_string($con, $_POST['age']);
	
	$sql="INSERT INTO yourFriends (name, hair, age)
	VALUES ('$name', '$hair', '$age')";

	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	}
	//echo "1 record added";

	mysqli_close($con);
	header( 'Location: http://web.engr.oregonstate.edu/~clarkant/assignment3/insertForm.php' ) ;
?>