<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anthony Clark Assignment 3:2</title>
	<meta charset="utf-8"/>
	<link rel ="stylesheet" type = "text/css" href = "Stylize.css">
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
</head>
<body>
<?php
ini_set('display_errors', 1);
require_once "vendor/autoload.php";
 
$faker = Faker\Factory::create();
 
for( $x=0 ; $x<5 ; $x++ ) {
 printf( "%s <%s> from %s\n", 
  $faker->name,
  $faker->email,
  $faker->city );
}
</body>
<html>