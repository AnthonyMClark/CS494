<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anthony Clark Assignment 3:1</title>
	<meta charset="utf-8"/>
	<link rel ="stylesheet" type = "text/css" href = "Stylize.css">
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
</head>
<body>

	<h1>FUN WITH DATABASES</h1>
	<h2>Pretend you have friends!</h2>

<div id="userIn">
<form action="insertData.php" method="post" >
	Name: <input type="text" name="name">
	Hair Color: <input type="text" name="hair">
	Age: <input type="text" name="age">
<input type="submit">
</form></div>
<br><br>
<div id = "tablePrint">
		<?php
			include "printTest.php";
		?>
</div>
</body>
</html>