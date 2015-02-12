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
	<tr><th colspan="2">How it Works</th></tr>
	<tr>
		<td>
			<div align="left">
			Once you've installed the library (see installation page), you can begin using Faker by using the $faker object to 
			connect to various pre-set field types.
			
			To run, you must include the following at the top of your page within php tags:
			<br><br><div style="color: #fff">require_once "vendor/autoload.php";<br>
					$faker = Faker\Factory::create(); -Creates a generator object				
			</div><br><br>
			With this in place, you may now pull values from the factory using formatters. Formatters exist within Faker's generator
			and are given names representative of the types of values that they are to display. To connect to a formatter is a simple 
			chore. Given the $faker variable initialized in the PHP at the top of our page, we can now use that variable to point to 
			one of our formatters and generate a random value. Within our PHP tags we can now do the following: 
			<br><br><div style="color: #fff">
			$faker->streetAddress - Generate a random street address that can be set to a var
			<br>
			echo $faker->streetAddress - Prints the random street address given to the screen
			</div><br>
			Displays of Street Address and more can be seen on the Demonstrations Page.
			<br> 
			<h3><div align="center">How the generator works:</div></h3><br>
			Given to us are a set of default "provider" namespaces that contain our values.
			Stated simply, let's say we want to generate Faker data for a company, and specifically a catch phrase for it.
			We could then use the company library provided to us, which contains the following options:
			<br><br>
			catchPhrase <br>            
			bs  <br>                    
			company  <br>               
			companySuffix <br>
			<br>
			To access these formatters, Faker will search its providers for a maching name, when we use $faker->catchPhrase,
			and then follow the path to a call, which in this case would be <div style="color: #fff">Faker\Provider\en_US\Company::catchPhrase()</div>
			Because Company is a default of the Faker base class, it is already included within the default generator.
			<div style="color: #fff">
			$faker = new Faker\Generator();<br>
			$faker->addProvider(new Faker\Provider\en_US\Company($faker));
			</div>
			<br><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerTable.php">See a list of the available default Faker formatters</a>
			</div>	
		</td>
		<td class="smallcell">
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerIndex.php">Faker Home Page</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/installation.php">Installation Process</a><br>
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