<?php 
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
	<style>
		.divBord{border-style:solid; border-width:1px;}
	</style>	
</head>
<body>
	<h1>Installation Process</h1>
	<h2>Steps to install faker tools</h2>
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerIndex.php">Faker Home Page</a> | 
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/howItWorks.php">How it Works</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/customization.php">Customization</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/demoFields.php">Demonstrations</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerTable.php">Formatters</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/inputFaker.php">Form Usage</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/stringsFaker.php">Form Usage Results</a>
	<br><br>
	<table>
	<tr><th>To Install on your server:<th><br></tr>
	<tr>
		<td><h3>Step One:</h3>
		In your command line, enter the following: curl -s http://getcomposer.org/installer | php
		<br><img src="http://web.engr.oregonstate.edu/~clarkant/HowTo/Images/step1.png" alt="Step One"><br></td>
	</tr>	
	<tr>
		<td><h3>Results from Step One:</h3>
		You should then receive a message stating that composer was successfully installed on to your server.
		<br><img src="http://web.engr.oregonstate.edu/~clarkant/HowTo/Images/step2.png" alt="Step Two"><br></td>
	</tr>
	<tr>
		<td><h3>Step Two:</h3>
		To get Faker on your server, open the composer file: vim composer.json.
		<br><img src="http://web.engr.oregonstate.edu/~clarkant/HowTo/Images/step3.png" alt="Step Three"><br></td>
	</tr>
	<tr>
		<td><h3>Step Three:</h3>
		Inside the composer file, enter the following code: {"require": { "fzaninotto/faker": "1.1.0"}}
		<br><img src="http://web.engr.oregonstate.edu/~clarkant/HowTo/Images/step4.png" alt="Step Four"><br></td>
	</tr>
	<tr>
		<td><h3>Step Four:</h3>
		With Faker now in the composer file, enter the following to install it: php composer.phar install
		<br><img src="http://web.engr.oregonstate.edu/~clarkant/HowTo/Images/step5.png" alt="Step Five"><br></td>
	</tr>
	<tr>
		<td><h3>Results from Step Four:</h3>
		The following message should be displayed, informing you of the install process, and finishing with autoload files.
		<br><img src="http://web.engr.oregonstate.edu/~clarkant/HowTo/Images/step6.png" alt="Step Six"><br></td>
	</tr>
	<tr><th></th></tr>
	</table>



</body>
</html>