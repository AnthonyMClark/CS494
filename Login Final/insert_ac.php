<?php

$host = 'oniddb.cws.oregonstate.edu';  
$username = 'clarkant-db'; // Mysql username 
$password = 'PlLhDDtv8g7KlkHW'; // Mysql password 
$db_name = 'clarkant-db'; // Database name 
$tbl_name = "userTable"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$userName=$_POST['userName'];
$password=$_POST['password'];

//make sure a UN was entered
if(empty($userName)){
	$passval = false;
	$usrmsg = 'The username field is required.';
	$return['passvalue'] = $passval;
	$return['msgstring'] = $usrmsg;
	echo json_encode($return);
	exit;
}
//Make sure a PW was entered
if(empty($password)){
	$passval = false;
	$usrmsg = 'The password field is required.';
	$return['passvalue'] = $passval;
	$return['msgstring'] = $usrmsg;
	echo json_encode($return);
	exit;
}
//Test to see if they entered in values that are long enough
if (strlen($userName) < 4){
    $passval = false;
	$usrmsg = 'Usernames must be at least 4 characters.';
	$return['passvalue'] = $passval;
	$return['msgstring'] = $usrmsg;
	echo json_encode($return);
	exit;	
} 
if (strlen($password) < 8){
    $passval = false;
	$usrmsg = 'Passwords must be at least 8 characters.';
	$return['passvalue'] = $passval;
	$return['msgstring'] = $usrmsg;
	echo json_encode($return);
	exit;	
} 


$userName = stripslashes($userName);
$password = stripslashes($password);
$userName = mysql_real_escape_string($userName);
$password = mysql_real_escape_string($password);


$sql="SELECT * FROM $tbl_name WHERE username='$userName'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
//Check to make sure the username doesnt already exist - if it doesnt, then you can register
if($count==0){
	// Insert data into mysql userTable table
	$sql="INSERT INTO $tbl_name(username, password)VALUES('$userName', '$password')";
	$result=mysql_query($sql);
	// Insert date into mysql yourFrieds table
	//header("Location:http://web.engr.oregonstate.edu/~clarkant/Final/main_login.php");
	$passval = true;
	$usrmsg = '';
	$return['passvalue'] = $passval;
	$return['msgstring'] = $usrmsg;
	echo json_encode($return);
	exit;
}
else
{
	$passval = false;
	$usrmsg = 'This username is already in use';
	$return['passvalue'] = $passval;
	$return['msgstring'] = $usrmsg;
	echo json_encode($return);
	exit;
}
// close connection 
mysql_close();
?> 