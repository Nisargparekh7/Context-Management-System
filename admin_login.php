<?php 
session_start();
?>

<html>
	<head>
		<title>login page</title>
		<style>
			body{
				background-image:url("img2.jpg");
				background-repeat:no-repeat;
			}
			fieldset{
				width:300px;
				height:150px;
				border:3px dotted white;
				border-radius:10px;
				transform: skewX(10deg);
			}
			form{
				margin-top:80px;
				margin-left:30px;
			}
			input:focus{
				background-color:green;
				color:white;
			}
		</style>
	</head>
	<body>
	<form action="loginBackend.php" method="post">
		<fieldset><legend style="color:white; font-style:italic; font-variant:small-caps;font-weight:bold">Welcome</legend>
		<table align="center">
			<tr>
				<td>
					
						<input type="text" name="Username" placeholder="Username"/>
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="Password" placeholder="Password"/>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Login"/>
		</fieldset>
	</form>
				</td>
			</tr>
			
			<tr>
				<td>
					<ul style="background-color:yellow">
						<li style="font-style:italic; font-variant:small-caps;font-weight:bold;text-decoration:none"><a href="Forgot.html">Forgot Username/Password?</a></li>
					</ul>	
				</td>
			</tr>
		</table>	
	</body>
</html>