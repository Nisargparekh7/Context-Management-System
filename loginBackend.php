 <?php
 session_start();

$host = "localhost";
	$dbUsername = "root";
	$dbPassword="";
	$dbname="internship_project";
	//create connection
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname) ;
		if (mysqli_connect_error()){
		die('connect Error('.mysqli_errno().')'.mysqli_connect_error());
		}


	
	
	if(isset($_POST['Username'])){
		$uname=mysqli_real_escape_string($conn,$_POST['Username']);
		$psw = mysqli_real_escape_string($conn,$_POST['Password']);
		$sql = "select   *  from admin where Username='".$uname."' AND Password= '".$psw."' limit 1";

		$result=mysqli_query($conn,$sql);
		
			if(mysqli_num_rows($result)==1)
				{
					$_SESSION['uname']=$uname;
				
					echo "<script> location.href='Article.php'; </script>";
				}
	
			else {
				echo "You have Entered Incorrect data";
				}
	

  }

 ?>