<?php 
session_start();
if(!isset($_SESSION['uname'])){
		echo "<script> location.href='admin_login.php'; </script>";
		}
?>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body>
	<center>
		<table>
		 <tr>
    <th>Date</th>
    <th>Title</th>
    
  </tr>
  <?php 
  	$conn= mysqli_connect("localhost","root","","internship_project");
  	if ($conn-> connect_error){
  		die("Connection failed:" .$conn-> connect_error);
  	}
  	$sql = "SELECT date,title from article ";
  	$result= $conn-> query($sql);

  	if($result -> num_rows >0){
  		while ($row = $result-> fetch_assoc()) {
  			echo "<tr><td>".$row["date"]." </td><td>"."<a href= Edit.php >".$row["title"]."</a></td></tr>";
  		}
  		echo "</table>";
  	}
  	else{
  		echo "0 result";
  	}
  	$conn-> close();
  ?>
  
</table>
<a href="http://localhost/intership_project/AddArticle.php">Add Article </a><br><br>
<a href="logout.php">logout</a>
	</center>
</body>
</html>