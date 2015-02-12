<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anthony Clark Assignment Final:1</title>
	<meta charset="utf-8"/>
	<link rel ="stylesheet" type = "text/css" href = "Style.css">
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
</head>
<body>
<h1> Anthony Clark's Amazing Login </h1>
<table>
<tr>
<td><button class="myButton" name ="it" onclick="registerUser()">Register</button><div id ="register"></div></td>
<td><button class="myButton" name ="it" onclick="loginUser()">Log In</button><div id ="login"></div></td>
</tr>
</table>
<script>
		function registerUser()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/Final/insert.php",
				dataType: 'text',
				success: function(data){
				document.getElementById("register").innerHTML = data;
				},
			});
		};
		function loginUser()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/Final/main_login.php",
				dataType: 'text',
				success: function(data){
				document.getElementById("login").innerHTML = data;
				},
			});
		};
</script>
</body>
</html>