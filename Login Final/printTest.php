<?php
session_start();
if(!session_is_registered(myusername)){
	header("Location:http://web.engr.oregonstate.edu/~clarkant/Final/main_login.php");
}
//ini_set('display_errors', 1);
$dbhost = 'oniddb.cws.oregonstate.edu';
	$dbname = 'clarkant-db';
	$dbuser = 'clarkant-db';
	$dbpass = 'PlLhDDtv8g7KlkHW';
	//$mydb = new mysqli($dbhost, $dbuser, $dbpass, $dname);
	
	
	
	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
		or die("Error connecting to database server");
	mysqli_select_db($con, $dbname)
		or die("Error selecting database: $dbname");
	//set the userID as the current session ID
	$userID = $_SESSION['ID'];
	//Print the table
	$totalAge = 0;
	$data = mysqli_query($con, "SELECT * FROM yourFriends WHERE userID = $userID ORDER BY ID DESC LIMIT 10") 
		or die(mysqli_error()); 
	Print "<table><tr><th>Name</th><th>Hair Color</th><th>Age</th></tr>"; 
	while($info = mysqli_fetch_array( $data )) 
	{ 

		Print "<tr><td>".$info['name'] . "</td> "; 
		Print "<td>".$info['hair'] . " </td>"; 
		Print "<td>".$info['age'] . " </td></tr>";
		$totalAge = $totalAge + $info['age'];
	}
	Print "<tr><td> </td>";
	Print "<td> </td>";
	Print "<td>The total age is: $totalAge</td></tr>";
	Print "</table>"; 

?>