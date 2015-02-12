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
		.smallcell{
			width: 200px;
		}
	</style>	
</head>
<body>
	<h1>The Faker Library</h1>
<table>
	<tr><th colspan="2">Faker: A data generation library</th></tr>
	<tr>
		<td>
			<p>How to Guide Written By: <?php echo $faker->firstName ?> <?php echo $faker->lastName ?> <br><?php echo $faker->email ?></p>
			<div align="left">This isn't my actual name. Refresh the page and it will be a new person. This is just one of the	
			cool features that the Faker library makes possible. Web development often leads us down a path where
			we need the use of filler data to populate our forms, test our submissions, make data from a service anonymous,
			or simulate a real environment. Faker is not only capable of performing these tasks, but it can do so while 
			generating a fill value that is representative of the data you would expect to be entered. Why is this important? 
			Having the ability to use expected data lets us find errors, bugs, formatting, and display issues that aren't 
			possible with lorem ipsum or other generic text placeholders.</div> 
		</td>
		<td class="smallcell">
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/installation.php">Installation Process</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/howItWorks.php">How it Works</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/customization.php">Customization</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/demoFields.php">Demonstrations</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerTable.php">Formatters</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/inputFaker.php">Form Usage</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/stringsFaker.php">Form Usage Results</a>
		</td>
	</tr>
	
</table>
</body>
</html>