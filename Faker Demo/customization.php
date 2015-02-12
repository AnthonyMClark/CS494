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
	<tr><th colspan="2">Customization</th></tr>
	<tr>
		<td>
			<div align="left">
			Within Faker, there are a number of options given to provide you with the customization desired to fit your needs.
			Examples:<br><br>
			The generator is capable of taking arguments to give more specified values in return. In example, our generator made above
			was the base setting of $faker = Faker\Factory::create();, but it's possible to make this specific to a particular region
			<br><div style="color: #fff">
			$faker = Faker\Factory::create('fr FR'); to return French values.<br>
			$faker = Faker\Factory::create('dk DK'); to return Danish values
			</div><br>
			More Language Options: We can use Faker in more than one language to create values for specific entries if we don't want it for all like above.
			<div style="color: #fff">$faker->kanaName</div> for example will return a kana name that can be split in to first name ($faker->firstKanaName)
			and last name ($faker->lastKanaName):
			</div><div align="left">
			Generator Seeding:
			<br>
			Like with rand in C++, it's possible to seed the Faker generator so that we get consistent results. This can be especially useful
			in testing if we find a particular entry that causes an error and we want to recreate it. To seed the Faker generator, we'll pass a 
			number into our generator, much as we did with the languages above.
			<br><div style="color: #fff">
			$faker = Faker\Factory::create();
			$faker->seed(1234);
			<br></div>
			Unique values:
			<br>
			With unique() we can generate a value that must be, as it says, unique to simulate data that would not 
			appear more than once. <div style="color: #fff">$faker->unique()->randomDigit</div> would return random digits that would not repeat.<br>
			<br>
			<h3>Adding your own formatters and providers:</h3><br>
			Faker allows us to create formatters by extending the public provider base class. Say we want to add a magazine class where we are able
			to generate the nname of the magazine and the issue number. To do so, we'd make the formatters as follows:<br>
			<div style="color: #fff">	
			namespace Faker\Provider;<br>
			class Magazine extends \Faker\Provider\Base<br>
			{<br>
			&nbsp&nbsp&nbsp public function magazineName($nbWords = 8) <br>
			&nbsp&nbsp&nbsp&nbsp {<br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $sentence = $this->generator->sentence($nbWords);<br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp return substr($sentence, 0, strlen($sentence)-1);<br>
			&nbsp&nbsp&nbsp&nbsp }<br>
			&nbsp&nbsp&nbsp public function issueNumber()<br>
			&nbsp&nbsp&nbsp&nbsp {<br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp return $this->generator->randomNumber(10);<br>
			&nbsp&nbsp&nbsp&nbsp }<br>
			}<br><br>			
			</div>
			To then add this new "Magazine" provider, we would connect it with our generator.<br>
			<div style="color: #fff">
				$faker->addProvider(new \Faker\Provider\Magazine($faker));
			</div>
			We are now able to further use these formatters, and can initialize a new Faker object to it.
			These formatters are now available to us to be used just as the pre-included ones are.
			<br>
			<div style="color: #fff">
				$magazine = new Magazine();<br>
				$magazine->makeName($faker->magazineName);<br>
				$magazine->makeIssue($faker->issueNumber);<br>
			</div>
			</div>
		</td>
		<td class="smallcell">
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerIndex.php">Faker Home Page</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/installation.php">Installation Process</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/howItWorks.php">How it Works</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/demoFields.php">Demonstrations</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/fakerTable.php">Formatters</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/inputFaker.php">Form Usage</a><br>
			<a href = "http://web.engr.oregonstate.edu/~clarkant/HowTo/stringsFaker.php">Form Usage Results</a>
		</td>
	</tr>
</table>
</body>
</html>