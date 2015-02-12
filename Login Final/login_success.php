<?php
session_start();
if(!isset($_SESSION['myusername'])){
		//No data entered - Send the user to the login page
		header('Location: http://web.engr.oregonstate.edu/~clarkant/Final/main_login.php');
		exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anthony Clark Assignment Final:1</title>
	<meta charset="utf-8"/>
	<link rel ="stylesheet" type = "text/css" href = "Style.css">
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<style>
		body{
		background-image:url('bgcolor.png');
		background-color:#3B0B17;
		} 
		table{
		background-color:#B45F04;
		color: #424242;
		}
		td{
		color: white
		}
	</style>	
</head>
<body>
	<div><a href = "Logout.php">Logout</a></div>
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