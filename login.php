<?php
session_start();
if(isset($_SESSION['uname'])){
	echo "<script> location.href='welcome.php'; </script>";
	}

	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="loginBackend.php" method="Post">
 Username : <input type="text" name="Username"><br><br>

 Password : <input type="text" name="Password"><br><br>
<button type="submit"> Submit</button>
</form>
 </body>
 </html>