<?php 
session_start();
// $_SESSION["USERNAME"]="Nisarg Parekh";

// $_SESSION["PASSWORD"]="Parekh";

// echo "Sesssion is set .. <br>";
// echo "USERNAME is " .$_SESSION["USERNAME"]. "<br>";
// echo "PASSWORD is " .$_SESSION["PASSWORD"]. "<br>";


// echo "session modify ..";
// print_r($_SESSION);echo "<br>";

// $_SESSION["PASSWORD"]="parekh";
// print_r($_SESSION);
// echo "<br>";
// session_unset();
// echo "Sesssion unset ";echo "<br>";
 
// echo "session destroy";echo "<br>";

echo "Set a Cookie ";echo "<br>";

$cookie_name="Nisarg_Parekh";
$cookie_value="nisarg";

setcookie($cookie_name,$cookie_value,time()+ (30),"/") ;
if(!isset($_COOKIE[$cookie_name]))
	echo "<script> location.href='Frame_c.html'; </script>";
else
{
	echo "cookie set";
}
?>
