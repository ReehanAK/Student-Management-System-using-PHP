<?php
include 'db.php';
session_start();
echo"<h1>LOGINOUT</h1>";
//if (isset($_SESSION['userid'])) 
{
	//echo "<script>alert('session is ended!')</script>";
	unset($_SESSION['userid']);
header("Location:http://localhost:8080/demo/oglogin.php");
	// echo "session";
	// echo $_SESSION['userid'];
	// u
	//session_destroy(user);
}
// else
// {
// 	echo "<script>alert('session is ended differently!')</script>";
// 	session_destroy(user);
// }
?>