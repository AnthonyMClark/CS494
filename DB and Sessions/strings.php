<?php 
	session_start(); 
	if(!isset($_SESSION['userName'])){
		//No data entered - Send the user to the input.php page
		header('Location: http://web.engr.oregonstate.edu/~clarkant/assignment3/input.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anthony Clark Assignment 3:2</title>
	<meta charset="utf-8"/>
	<link rel ="stylesheet" type = "text/css" href = "Stylize.css">
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
</head>
<body>
	<h1>Strings Page</h1>
	<h2>Here are your strings:</h2>
	<div id="showStrings">
		Welcome <?php echo $_SESSION['userName'] ?>, lets string your strings<br>
		x: [<?php echo $_SESSION['string1'] ?>] and 
		y: [<?php echo $_SESSION['string2'] ?>]!<br>
	</div>
	
	<form action="strings.php" method="GET">
		<input type="hidden" name="func" value="conxy"/>
		<input type="submit" value="concatenate x + y"/>
	</form>	
	<br>
	<form action="strings.php" method="GET">
		<input type="hidden" name="func" value="conyx"/>
		<input type="submit" value="concatenate y + x"/>
	</form>
	<br>
	<form action="strings.php" method="GET">
		<input type="submit" value="is x a substring of y"/>
		<input type="hidden" name="func" value="substr"/>
	</form>
	<br>	
	<?php
		if($_GET["func"]=="conxy"){
			echo "You've combined string x + string y:<br>"; 
			echo $_SESSION['string1']." ".$_SESSION['string2'];
		}
		if($_GET["func"]=="conyx"){
			echo "You've combined string y + string x:<br>";  
			echo $_SESSION['string2']." ".$_SESSION['string1'];
		}
		if($_GET["func"]=="substr"){
			echo "Checking for substrings:<br>";  
			$inc = 0;
			$string1 = $_SESSION['string1'];
			$string2 = $_SESSION['string2'];
			$pos = strpos($string1, $string2);
			//comp x to y
			if ($pos !== false) {
				print "String y is a substring of string x\n";
				$inc = 1;
			} 
			//comp y to x
			$pos2 = strpos($string2, $string1);
			if ($pos2 !== false) {
				print "String x is a substring of string y\n";
				$inc = 1;
			}
			//check if we had any matches
			if ($inc == 0) {
				print "Neither string is a substring\n";
				
			}
		}
	?>
	
</body>
</html>