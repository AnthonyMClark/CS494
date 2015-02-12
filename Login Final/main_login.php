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
<h2> Anthony Presents: </h2>
<h1> The Amazing Login </h1>
<body>
	<div><a href = "Logout.php">Logout</a> | <a href = "insert.php">Register</a></div>
	<div align = "center"><table style = "width:450px;">
	<tr>
	<th colspan = "2">Member Login </th>
	</tr>
	<form name="form1" method="post">
	<tr>
	<td class="tdbg" >Username:</td>
	<td><div align = "left"><input name="myusername" type="text" id="myusername"></div><div id ="verify"></div></td>
	</tr>
	<tr>
	<td class="tdbg">Password:</td>
	<td><div align = "left"><input name="mypassword" type="password" id="mypassword" align ="right"><input type="submit" class="login" id ="Submit" name="Submit" value="Login"></div></td>
	</tr>
	</form>
	</table></div>
<script>
	/*<tr>
	<td><button class="myButton" name ="it" onclick="registerUser()">Register</button></td>
	</tr>
	<tr><td><div id ="register"></div></td></tr>
	
	function registerUser()
		{
			$.ajax({
				url: "http://web.engr.oregonstate.edu/~clarkant/Final/insert.php",
				dataType: 'text',
				success: function(data){
				document.getElementById("register").innerHTML = data;
				},
			});
		};*/
	$(function() {	//run on load
		var $button = $('#Submit');
		$button.on('click', function(e) {
			e.preventDefault();
			var me = this;
			$.ajax({
				url: 'checklogin.php',
				type: 'POST',
				dataType: 'json',
				data:	{
							myusername	:	$('#myusername').val(),
							mypassword	:	$('#mypassword').val()
				},
				success: function(data) {
					if(data.passvalue == true) {
						window.location.replace("login_success.php");
					}
					else {
						alert(data.msgstring);
					}
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) {
					alert("Error");
				}
			});
		});
	});
</script>	
</body>
</html>