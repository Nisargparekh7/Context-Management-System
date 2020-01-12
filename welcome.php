<?php session_start();
if(isset($_SESSION['uname'])){
	
	echo "<script> location.href='Article.html'; </script>";
	}
else {
		
		echo "<script> location.href='login.php'; </script>";
	}	

?>
<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
welcome
<button onkeypress="myfunction()"><a href="login.php">  logout</a></button>
<script type="text/javascript">
	<?php session_destroy();
		setcookie("user","",time()-3600);
	 ?>
</script>
</body>
</html>