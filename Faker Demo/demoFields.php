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
	<h1>Faker Value Demonstrations</h1>
	<h2>Click on a button to see it populate</h2>
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerIndex.php">Faker Home Page</a> | 
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/installation.php">Installation</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/howItWorks.php">How it Works</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerTable.php">Formatters</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/customization.php">Customization</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/inputFaker.php">Form Usage</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/stringsFaker.php">Form Usage Results</a>
	<br><br>
	<table>
	<div>
		<tr>
		<th colspan = "4">Samples of Faker Fields</th>
		</tr>
		<tr>
		<td><button class="myButton" name ="it" onclick="streetFunction()">Street Address</button> <div id ="street"></div></td>
		<td><button class="myButton" name ="it" onclick="firstNameFunction()">First Name</button> <div id ="firstName"></div></td>
		<td><button class="myButton" name ="it" onclick="lastNameFunction()">Last Name</button> <div id ="lastName"></div></td>
		<td><button class="myButton" name ="it" onclick="emailFunction()">Email Address</button> <div id ="email"></div></td>
		</tr>
		<tr>
		<td><button class="myButton" name ="it" onclick="phoneNumberFunction()">Phone Number</button> <div id ="phoneNumber"></div></td>
		<td><button class="myButton" name ="it" onclick="birthDateFunction()">Birth Date</button> <div id ="birthDate"></div></td>
		<td><button class="myButton" name ="it" onclick="companyNameFunction()">Company Name</button> <div id ="companyName"></div></td>
		<td><button class="myButton" name ="it" onclick="catchPhraseFunction()">Catch Phrase</button> <div id ="catchPhrase"></div></td>
		</tr>
		<tr>
		<td><button class="myButton" name ="it" onclick="cityFunction()">City</button> <div id ="city"></div></td>
		<td><button class="myButton" name ="it" onclick="stateFunction()">State</button> <div id ="state"></div></td>
		<td><button class="myButton" name ="it" onclick="offerFunction()">Offer</button> <div id ="offer"></div></td>
		<td><button class="myButton" name ="it" onclick="countryFunction()">Country</button> <div id ="country"></div></td>
		</tr>
	</div>
	</table>
	<table>
		<tr>
		<td><button class="myButton" name ="it" onclick="textFunction()">Text</button> <div id ="text"></div></td>
		</tr>
		<tr>
		<td><button class="myButton" name ="it" onclick="paragraphFunction()">Paragraph</button> <div id ="paragraph"></div></td>
		</tr>
		<tr>
		<th colspan = "1"></th>
		</tr>
	</table>
	<table>
	<tr><td><h3>What's happening:</h3></td></tr>
	<tr><td><div align="left">In our examples above, what we're doing is pulling values from the Faker generator, using our initialized
	$faker object. For example, in the case of the Country, a button has been created that when hit, will launch an AJAX
	call to a function that reads the values from the page country.php. In this page, our code reads as:<br>
	<div style="color: #fff">
	PHP TAG<br>
		require_once "vendor/autoload.php";<br>
		 
		$faker = Faker\Factory::create();<br>

		echo $faker->country <br>
	PHP CLOSE TAG<br></div>
	While AJAX is not required for using Faker, I chose to use it here in order to best demonstrate the random property of the library
	without forcing a page refresh. 
	</div>
	</td></tr>
	</table>
	<script>
		function streetFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/streetAddress.php",
				dataType: 'text',
				success: function(data){
				document.getElementById("street").innerHTML = data;
				},
			});
		};
		function firstNameFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/firstName.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("firstName").innerHTML = data;
				},
			});
		};
		function lastNameFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/lastName.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("lastName").innerHTML = data;
				},
			});
		};
		function emailFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/email.php",
				dataType: 'text',
				success: function(data){
				document.getElementById("email").innerHTML = data;
				},
			});
		};
		function phoneNumberFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/phoneNumber.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("phoneNumber").innerHTML = data;
				},
			});
		};
		function birthDateFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/birthDate.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("birthDate").innerHTML = data;
				},
			});
		};
		function companyNameFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/companyName.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("companyName").innerHTML = data;
				},
			});
		};
		function catchPhraseFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/catchPhrase.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("catchPhrase").innerHTML = data;
				},
			});
		};
		function cityFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/city.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("city").innerHTML = data;
				},
			});
		};
		function stateFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/state.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("state").innerHTML = data;
				},
			});
		};
		function offerFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/offer.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("offer").innerHTML = data;
				},
			});
		};
		function countryFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/country.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("country").innerHTML = data;
				},
			});
		};
		function textFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/text.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("text").innerHTML = data;
				},
			});
		};
		function paragraphFunction()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/HowTo/paragraph.php",
				dataType: 'text',
				success: function(data){
					document.getElementById("paragraph").innerHTML = data;
				},
			});
		};
	</script>
</body>
</html>
