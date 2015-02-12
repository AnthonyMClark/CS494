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
	<h2>Default Formatters</h2>
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerIndex.php">Faker Home Page</a> | 
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/howItWorks.php">How it Works</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/customization.php">Customization</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/demoFields.php">Demonstrations</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/inputFaker.php">Form Usage</a> |
	<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/stringsFaker.php">Form Usage Results</a>
<table>
	<tr><th>Formatters</th></tr>
	<tr><td>
		<h3>Personal Information</h3>
		<div align="left">
		$faker->name; | Returns a first and last name<br>
		$faker->address; | Returns a full address (street, city, state, zip)<br>
		$faker->titleMale; | Returns Mr.<br>
		$faker->titleFemale; | Returns Ms.<br>
		$faker->suffix; | Returns Jr.<br>
		$faker->firstNameMale; | Returns Arthur<br>
		$faker->firstNameFemale; | Returns Shannon<br>
		$faker->lastName; | Returns Kemmer<br>
		$faker->phoneNUmber; | Returns 916-455-8888<br>
		</div>
		</td></tr>
		<tr><td>
		<h3>Filler</h3>
		<div align="left">
		$faker->text; | Returns a block of text<br>
		$faker->word; | Returns a word<br>
		$faker->words($nb=10); | Returns 10 words<br>
		$faker->sentence($nb = 12); | Returns a sentence with 12 words<br>
		$faker->sentences($nb = 5); | Returns 5 sentences<br>
		$faker->paragraph($nbSentences = 5); | Returns a paragraph with 5 sentences<br>
		$faker->paragraphs($nb = 5); | Returns 5 paragraphs<br
		</div>
		</td></tr>
		<tr><td>
		<h3>Addresses</h3>
		<div align="left">
		$faker->stateAbbr; | Returns CA<br>
		$faker->streetSuffic; | Returns Keys<br>
		$faker->city; | Returns Sacramento<br>
		$faker->secondaryAddress; | Returns #300<br>
		$faker->cityPrefix; | Returns Lake<br>
		$faker->state; | Returns California<br>
		$faker->buildingNumber; | Returns 1230<br>
		$faker->streetName; | Returns Swindon Ct<br>
		$faker->streetAddress; | Returns 1607 Olive Point Way #12<br>
		$faker->postcode; | Returns 95678<br>
		$faker->country; | Returns Italy<br>
		$faker->latitude; | Returns 72.145668<br>
		$faker->longitude; | Returns 79.234593<br>
		$faker->kommune; | Returns Frederiksberg<br>
		$faker->region; | Returns a random region name<br>
		</div>
		</td></tr>
		<tr><td>
		<h3>Date and Time</h3>
		<div align="left">
		$faker->dateTimeThisMonth($max = 'now');  | Return date and time for this month<br>
		$faker->dateTimeThisYear($max = 'now');  | Return date and time for this year    <br>
		$faker->dateTimeThisCentury($max = 'now');  | Return date and time for this century    <br> 
		$faker->dateTime($max = 'now');  | Returns a date and time<br>
		$faker->dateTimeAD($max = 'now');  | Returns a date and time in AD<br>
		$faker->iso8601;  | Returns date and military time<br>
		$faker->time($format = 'H:i:s', $max = 'now');  | Returns time formatted<br>
		$faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now');  | Returns time within a range<br>
		$faker->amPm($max = 'now');  | Returns AM or PM<br>
		$faker->timezone;  | Returns region                             <br>
		$faker->dayOfMonth($max = 'now');  | Returns a day of the month<br>
		$faker->dayOfWeek($max = 'now');  | Returns Monday<br>
		$faker->month($max = 'now');  | Returns 01   <br>
		$faker->monthName($max = 'now');  | Returns December<br>
		$faker->year($max = 'now');  | Returns 2004<br>
		$faker->century;  | Returns roman numeral century<br>
		</div>
		</td></tr>
		<tr><td>
		<h3>Random Numbers and Elements</h3>
		<div align="left">
		$faker->randomDigit;    | Returns 9<br>
		$faker->randomDigitNotNull;   | Returns 239<br>
		$faker->randomNumber($nbDigits = NULL); | Returns 9234530<br>
		$faker->randomNumber($from, $to); | Returns 20324<br>
		$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL); | Returns 52.1323<br>
		$faker->randomLetter;  | Returns x<br>
		$faker->randomElements($array = array ('a','b','c'), $count = 1); | Returns C<br>
		$faker->randomElement($array = array ('a','b','c')); | Returns a<br>
		$faker->numerify($string = '###'); | Returns 123<br>
		$faker->lexify($string = '????'); | Returns abcd<br>
		$faker->bothify($string = '## ??'); | Returns 15 AX<br>
		</div>
		</td></tr>
		
		<tr><td>
		<h3>Businesses</h3>
		<div align="left">
		$faker->tollFreePhoneNumber; | Returns 1-888-234-4924<br>
		$faker->pesel; | Returns 40023948092<br>
		$faker->personalIdentityNumber; | Returns FKX903212<br>
		$faker->taxperIdentificationNumber; | Returns 1242678902<br>
		$faker->bank; | Returns a bank name<br>
		$faker->bankAccountNumber; | Returns random account number<br>
		$faker->departmentNumber; | Returns 5A<br>
		$faker->departmentName; | Returns department name<br>
		$faker->ean13;  | Returns bar code w/ 13 chars<br>
		$faker->uuid; | Returns 8e72b112-9e28-9u8j-p42p-893242489hf<br>
		$faker->creditCardType;  | Returns Visa<br>
		$faker->creditCardNumber; | Returns credit card num<br>
		$faker->creditCardExpirationDate;  | Returns 01/20<br>
		$faker->creditCardDetails;  | Returns array(cardType, cardNum, cardHolder, cardExp)<br>
		$faker->catchPhrase;  | Returns business catchphrase<br>
		$faker->bs;  | Returns business statement<br>
		$faker->company; | Returns company name<br>
		$faker->companySuffix; | Returns and Co.<br>
		</div>
		</td></tr>
		
		<tr><td>
		<h3>Internet</h3>
		<div align="left">
		$faker->userAgent; | Returns internet browser details<br>
		$faker->chrome; | Returns Chrome browser details<br>
		$faker->firefox; | Returns Firefox browser details<br>
		$faker->safari; | Returns Safari browser details<br>
		$faker->operal; | Returns Opera browser details<br>
		$faker->internetExplorer; | Returns internet explorer details<br>
		$faker->email; | Return an email address<br>
		$faker->safeEmail; | Return a detailed email address<br>
		$faker->freeEmail; | Return an email from a free provider<br>
		$faker->companyEmail; | Return an email from a company<br>
		$faker->freeEmailDomain; | Return gmail.com<br>
		$faker->userName; | Return a username<br>
		$faker->domainName; | Return a domain name<br>
		$faker->url; | Return a URL<br>
		$faker->ipv4; | Return an IP address<br>
		$faker->localIpv4; | Return a local IP address<br>
		$faker->ipv6; | Return IP v6<br>
		$faker->macAddress; | Return a mac address<br>
		</div>
		</td></tr>
			
		<tr><td>
		<h3>Misc</h3>
		<div align="left">
		$faker->dateTime(); | Returns current time if not seeded <br>
		$faker->fileExtension; | Returns .jpeg<br>
		$faker->hexColor; | Returns HTML color code<br>
		$faker->color; | Returns white<br>
		</div>
		</td></tr>
		<tr><th> </th></tr>
</table>
</body>
</html>