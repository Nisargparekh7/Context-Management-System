<?php
session_start();

session_unset();

session_destroy();
echo "<script> location.href='admin_login.php'; </script>";
	
 ?>

 <!-- <!DOCTYPE html>
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
 </html> -->