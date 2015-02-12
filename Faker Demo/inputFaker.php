<?php 
ini_set('display_errors', 1);
require_once "vendor/autoload.php";
 
$faker = Faker\Factory::create();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anthony Clark How To Guide</title>
	<meta charset="utf-8"/>
	<link rel ="stylesheet" type = "text/css" href = "Stylize.css">
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
</head>
<body>
	<h1>The Faker Library</h1>
	<h2>Use Faker to fill out the text boxes below!</h2>
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerIndex.php">Faker Home Page</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/installation.php">Installation</a> |	
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/howItWorks.php">How it Works</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/demoFields.php">Demonstrations</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerTable.php">Formatters</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/customization.php">Customization</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/stringsFaker.php">Form Usage Results</a>
	<br><br>
	
<div id="userIn">
<form action="http://web.engr.oregonstate.edu/~clarkant/HowTo/inputFaker.php">
	<input type = "submit" class="myButton" value="Insert New Faker Values">
</form>
<br>
<form name="fields" action="sessionFaker.php" method="post" > 
	<table>
		<tr>
			<th colspan="2">User Profile Sample</th>
		</tr>
		<tr>
			<td colspan="2"><h3>User Information</h3></td>
		</tr>
		<tr>
			<td><div align="left">UserName:</div></td>
			<td><div align="left"><input type="text" name="userName" size="50" value="<?php echo $faker->userName ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">Password:</div></td>
			<td><div align="left"><input type="text" name="password" size="50" value="<?php echo $faker->domainWord ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">First Name:</div></td>
			<td><div align="left"><input type="text" name="firstName" size="50" value="<?php echo $faker->firstName ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">Last Name:</div></td>
			<td><div align="left"><input type="text" name="lastName" size="50" value="<?php echo $faker->lastName ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">DOB:</div></td>
			<td><div align="left"><input type="text" name="DOB" size="50" value="<?php echo $faker->dateTimeThisCentury->format('Y-m-d') ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">Phone Number:</div></td>
			<td><div align="left"><input type="text" name="phoneNumber" size="50" value="<?php echo $faker->phoneNumber ?>"></div></td>
		</tr>
		<tr>
			<td colspan="2"><h3>Address</h3></td>
		</tr>
		<tr>
			<td><div align="left">Street Address:</div></td>
			<td><div align="left"><input type="text" name="streetAddress" size="50" value="<?php echo $faker->streetAddress ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">City:</div></td>
			<td><div align="left"><input type="text" name="city" size="50" value="<?php echo $faker->city ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">State:</div></td>
			<td><div align="left"><input type="text" name="state" size="50" value="<?php echo $faker->state ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">Zip:</div></td>
			<td><div align="left"><input type="text" name="zip" size="50" value="<?php echo $faker->postcode ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">Country:</div></td>
			<td><div align="left"><input type="text" name="country" size="50" value="<?php echo $faker->country ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">Latitude:</div></td>
			<td><div align="left"><input type="text" name="latitude" size="50" value="<?php echo $faker->latitude ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">Longitute:</div></td>
			<td><div align="left"><input type="text" name="longitude" size="50" value="<?php echo $faker->longitude ?>"></div></td>
		</tr>
		<tr>
			<td colspan="2"><h3>Website Information</h3></td>
		</tr>
		<tr>
			<td><div align="left">Domain Name:</div></td>
			<td><div align="left"><input type="text" name="creditCardType" size="50" value="<?php echo $faker->domainName ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">URL:</div></td>
			<td><div align="left"><input type="text" name="creditCardNumber" size="50" value="<?php echo $faker->url ?>"></div></td>
		</tr>
		<tr>
			<td><div align="left">IP:</div></td>
			<td><div align="left"><input type="text" name="creditCardExpiration" size="50" value="<?php echo $faker->ipv4 ?>"></div></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit"  class="myButton" value="Submit my form"></td>
		</tr>
		<tr>
			<th colspan="2"> </th>
		</tr>	
	</table>	
</form></div>
</body>
</html>