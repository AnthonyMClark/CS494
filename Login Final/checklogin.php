<?php
session_start();
$host = 'oniddb.cws.oregonstate.edu';  
$username = 'clarkant-db'; // Mysql username 
$password = 'PlLhDDtv8g7KlkHW'; // Mysql password 
$db_name = 'clarkant-db'; // Database name 
$tbl_name = "userTable"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

//make sure a UN was entered
if(empty($myusername)){
	$passval = false;
	$usrmsg = 'The username field is required.';
	$return['passvalue'] = $passval;
	$return['msgstring'] = $usrmsg;
	echo json_encode($return);
	exit;
}
//Make sure a PW was entered
if(empty($mypassword)){
	$passval = false;
	$usrmsg = 'The password field is required.';
	$return['passvalue'] = $passval;
	$return['msgstring'] = $usrmsg;
	echo json_encode($return);
	exit;
}

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	while ($row = mysql_fetch_assoc($result)) {
		$_SESSION['ID'] = $row['ID'];
		$_SESSION['myusername'] = $row['username'];
	//	$_SESSION['mypassword'] = $row['password'];
		$passval = true;
		$usrmsg = '';
		$return['passvalue'] = $passval;
		$return['msgstring'] = $usrmsg;
		echo json_encode($return);
		exit;
	}
}
else {
//	echo "Wrong Username or Password";
	$passval = false;
	$usrmsg = 'Incorrect username or password';
	$return['passvalue'] = $passval;
	$return['msgstring'] = $usrmsg;
	echo json_encode($return);
	exit;
}
?>