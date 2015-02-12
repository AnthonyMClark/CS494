<?php 
	session_start(); 
	if(!isset($_SESSION['userName'])){
		//No data entered - Send the user to the input.php page
		header('Location: http://web.engr.oregonstate.edu/~clarkant/HowTo/inputFaker.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>How to Guide</title>
	<meta charset="utf-8"/>
	<link rel ="stylesheet" type = "text/css" href = "Stylize.css">
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
</head>
<body>
	<h1>The Faker Library</h1>
	<h2>Completed User Profile:</h2>
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerIndex.php">Faker Home Page</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/installation.php">Installation</a> |	
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/demoFields.php">Demonstrations</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/howItWorks.php">How it Works</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/customization.php">Customization</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/inputFaker.php">Form Usage</a>
	<br><br>
	<div id="showStrings">
	<table>
		<tr><th colspan="2">User Profile Sample</th></tr>
		<tr>
			<td colspan="2"><h3>User Information</h3></td>
		</tr>
		<tr>
			<td><div align="left">UserName:</div></td> 
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['userName'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">Password:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['password'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">First Name:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['firstName'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">Last Name:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['lastName'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">DOB:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['DOB'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">Phone Number:</div></td> 
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['phoneNumber'] ?></div></td>
		</tr>
		<tr><td colspan="2"><h3>Address</h3></td></tr>
		<tr>
			<td><div align="left">Street Address:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['streetAddress'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">City:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['city'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">State:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['state'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">Zip:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['zip'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">Country:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['country'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">Latitude:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['latitude'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">Longitute:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['longitude'] ?></div></td>
		</tr>
		<tr><td colspan="2"><h3>Website Information</h3></td></tr>
		<tr>
			<td><div align="left">Domain Name:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['creditCardType'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">URL:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['creditCardNumber'] ?></div></td>
		</tr>
		<tr>
			<td><div align="left">IP:</div></td>
			<td><div align="left" style="color: #fff"><?php echo $_SESSION['creditCardExpiration'] ?></div></td>
	</table>	
	</div>
</body>
</html>