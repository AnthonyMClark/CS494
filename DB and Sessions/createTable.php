<?php
	 //ini_set('display_errors', 1);
	$dbhost = 'oniddb.cws.oregonstate.edu';
	$dbname = 'clarkant-db';
	$dbuser = 'clarkant-db';
	$dbpass = 'PlLhDDtv8g7KlkHW';
	
	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
		or die("Error connecting to database server");
	mysqli_select_db($con, $dbname)
		or die("Error selecting database: $dbname");
	//create table
	 mysqli_query($con, "CREATE TABLE yourFriends (
		PID INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(PID),
		name VARCHAR(30), 
		age INT
		");  
	Print "Your table has been created";	
	mysqli_query($con, "ALTER TABLE yourFriends ADD hair VARCHAR(15) AFTER name");
	mysqli_query($con, "INSERT INTO hair
		VALUES ( 'brown' )
		"); 	 
	mysqli_close($con);	
?> 