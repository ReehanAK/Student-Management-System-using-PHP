<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>new page</title>
</head>
<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
		body{
			background-color: #000000;
		}
		.login{
			text-align: center;
			color: white;
		}
.st{
	font-family: bold;
}
	</style>
      <div class="login">
<form method="request" >
		<label for="label"><center>STUDENT LOGIN</center></label>
		<br>
		<label>
   USERNAME:<input type="text" name="user" id="user" placeholder="enter the username">
	</label>
	<br>
	<label>
		<br>
		PASSWORD:<input type="PASSWORD" name="pass" id="pass" placeholder="enter the password">
	</label>
	<br><br><input type="submit" value="SUBMIT" name="Submit" id="Submit"><br/>
	</div>

<?php
include 'db.php';
if(isset($_REQUEST['Sumbit']))
{
$username=$_REQUEST['user'];
$password=$_REQUEST['pass'];
$query="SELECT* from lo where username='admin' and password='admin'";
$result=mysqli_query($dbhandle,$query);
if ($query) {
echo "<script>login successful</script>";
}
else
{
	echo"login failed";
}
header("location :index.html");
}
?>
</body>
</html>