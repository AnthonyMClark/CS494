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
	<h2> Anthony Presents: </h2>
	<h1> The Amazing Login </h1>
	<div><a href = "Logout.php">Logout</a> | <a href = "main_login.php">Login</a></div>
	
	<div align = "center"><table style = "width:450px;">
	<tr>
	<th colspan = "2">New User? Register Here!</th>
	</tr>
	<form name="form1" method="post">
	<tr>
	<td class="tdbg" >Username:<br>4 char min</td>
	<td><div align = "left"><input name="userName" type="text" id="userName"></div><div id ="verify"></div></td>
	</tr>
	<tr>
	<td class="tdbg">Password:<br> 8 char min</td>
	<td><div align = "left"><input name="password" type="password" id="password" align ="right"><input type="submit" class="login" id ="Submit" name="Submit" value="Submit"></div></td>
	</tr>
	</form>
	</table></div>
</body>
<script>
	$(function() {	//run on load
			var $button = $('#Submit');
			$button.on('click', function(e) {
				e.preventDefault();
				var me = this;
				$.ajax({
					url: 'insert_ac.php',
					type: 'POST',
					dataType: 'json',
					data:	{
								userName	:	$('#userName').val(),
								password	:	$('#password').val()
					},
					success: function(data) {
						if(data.passvalue == true) {
							window.location.replace("main_login.php");
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
</html>