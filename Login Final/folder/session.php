<?php
	session_start();
	ini_set('display_errors', 1);
	// store session data
	//$_SESSION['views']=1;
	if($_SERVER['REQUEST_METHOD']=='POST') {
		//Remove white space from input before or after and set vals to vars
		$_SESSION['userName'] = trim($_POST["userName"]);
		$_SESSION['string1'] = trim($_POST["string1"]);
		$_SESSION['string2'] = trim($_POST["string2"]);
		//Send the user to the strings.php page
		header('Location: http://web.engr.oregonstate.edu/~clarkant/assignment3/strings.php');
		exit;
	}
	if(isset($_SESSION['userName'])){
		//We've already gotten the data - Send the user to the strings.php page
		header('Location: http://web.engr.oregonstate.edu/~clarkant/assignment3/strings.php');
		exit;
	}
	//We have no data - send them to the input page
	header('Location: http://web.engr.oregonstate.edu/~clarkant/assignment3/input.php');
?>
