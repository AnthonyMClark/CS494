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
	 mysqli_query($con, "CREATE TABLE users (
	 ID MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	 username VARCHAR(30), 
	 password VARCHAR(30)
	");  
	Print "Your table has been created";	
	
	// Connects to your Database 
	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
		or die("Error selecting database: $dbname");
	mysqli_select_db($con, $dbname) 
		or die("Error selecting database: $dbname");
	mysqli_query($con, "INSERT INTO users
	VALUES ( 'Bill', password1 ), ( 'Mike', password2 ), ( 'Alisa', password3 )"); 

	Print "Your table has been populated"; 
		 
	mysqli_close($con);	
?> 