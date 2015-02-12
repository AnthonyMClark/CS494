<?php
session_start();
if(!session_is_registered(myusername)){
	header("Location:http://web.engr.oregonstate.edu/~clarkant/Final/main_login.php");
}
?>
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
	//set userID to the session ID so that we can store it in the table	
	$userID = $_SESSION['ID'];
	// escape variables for security
	/*	
	$name = $_POST['name'];
	$hair = $_POST['hair'];
	$age = $_POST['age'];
	$name = stripslashes($name);
	$hair = stripslashes($hair);
	$name = mysql_real_escape_string($name);
	$hair = mysql_real_escape_string($hair);
	$hair = stripslashes($hair);
	$age = mysql_real_escape_string($name);
	*/
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$hair = mysqli_real_escape_string($con, $_POST['hair']);
	$age = mysqli_real_escape_string($con, $_POST['age']);
	
	$sql="INSERT INTO yourFriends (userID, name, hair, age)
	VALUES ('$userID', '$name', '$hair', '$age')";

	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	}
	//echo $userID;

	mysqli_close($con);
	header( 'Location: http://web.engr.oregonstate.edu/~clarkant/Final/login_success.php' ) ;
?>