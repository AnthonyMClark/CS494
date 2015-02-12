<?php
	session_start();
	//ini_set('display_errors', 1);
	// store session data
	//$_SESSION['views']=1;
	if($_SERVER['REQUEST_METHOD']=='POST') {
		//Remove white space from input before or after and set vals to vars
		$_SESSION['userName'] = trim($_POST['userName']);
		$_SESSION['password'] = trim($_POST['password']);
		$_SESSION['firstName'] = trim($_POST['firstName']);
		$_SESSION['lastName'] = trim($_POST['lastName']);
		$_SESSION['DOB'] = trim($_POST['DOB']);
		$_SESSION['phoneNumber'] = trim($_POST['phoneNumber']);
		$_SESSION['streetAddress'] = trim($_POST['streetAddress']);
		$_SESSION['city'] = trim($_POST['city']);
		$_SESSION['state'] = trim($_POST['state']);
		$_SESSION['zip'] = trim($_POST['zip']);
		$_SESSION['country'] = trim($_POST['country']);
		$_SESSION['latitude'] = trim($_POST['latitude']);
		$_SESSION['longitude'] = trim($_POST['longitude']);
		$_SESSION['creditCardType'] = trim($_POST['creditCardType']);
		$_SESSION['creditCardNumber'] = trim($_POST['creditCardNumber']);
		$_SESSION['creditCardExpiration'] = trim($_POST['creditCardExpiration']);
		
		//Send the user to the strings.php page
		header('Location: http://web.engr.oregonstate.edu/~clarkant/HowTo/stringsFaker.php');
		exit;
	}
	if(isset($_SESSION['userName'])){
		//We've already gotten the data - Send the user to the strings.php page
		header('Location: http://web.engr.oregonstate.edu/~clarkant/HowTo/stringsFaker.php');
		exit;
	}
	//We have no data - send them to the input page
	header('Location: http://web.engr.oregonstate.edu/~clarkant/HowTo/inputFaker.php');
?>
