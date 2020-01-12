<?php
session_start();
if(isset($_SESSION['uname'])){
	
	echo "<script> location.href='Article.php'; </script>";
	}
else {
		
		echo "<script> location.href='admin_login.php'; </script>";
	}	
 ?>