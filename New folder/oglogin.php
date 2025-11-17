<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>new page</title>
</head>
<body>
	<link href="https:cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		h1{
			font-family: sans-serif;
			border-left: 2px solid;
			border: 2px solid;
			border-bottom: 2px solid;
			background-color: white;
		}
		/*body{
			background-color: #f0f0f0;
		}*/
		body{
			background-image: url(reehan.jpg);
			 background-position: center;
			 background-size: 1920px 1080px;
                  background-repeat: no-repeat, repeat;
		}
		#login{
			text-transform: lowercase;
			text-align: center;
			color: black;
			padding: 10px;
		}
.st{
	font-family: bold;
}
form{
	margin-top: 150px;
	border: 2px solid;
	background-color: gray;
}
</style>
      <div id="login">
<form method="request" >
		<label for="label"><center><h1>STUDENT LOGIN</h1></center></label>
		<br>
		<label>
   USERNAME:<br><input type="text" name="user" id="user" placeholder="enter the username">
	</label>
	<br>
	<label>
		<br>
		PASSWORD:<br><input type="PASSWORD" name="pass" id="pass" placeholder="enter the password">
	</label>
	<br><br><input type="submit" value="sumbit" name="submit" id="submit"><br/>
	</div>
</form>
<?php
include 'db.php';
session_start();
//
if(isset($_REQUEST['submit']))
{
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$_SESSION['user']=$user;
 echo $user;
 echo "<br>";
 echo $pass;
 $selquery = "SELECT id from lo where user='$user' and password='$pass'";
  $result=mysqli_query($dbhandle,$selquery);
   $getarray = mysqli_fetch_assoc($result);
//  exit;

if($getarray['id']!='')
{
	$_SESSION['userid'] = $getarray['id'];// this line is used to create session id with the name of id of the user
	echo $_SESSION['userid'];
	// exit;
	echo "<script>location.href='http://localhost/demo/index.html';</script>";

}
else
{
	echo"login failed";
 	echo "<script>location.href='http://localhost/demo/oglogin.php';</script>";
 	
}

exit;
  if($_REQUEST['user']=$user && $_REQUEST['pass']=$pass) {
    	$_SESSION['user']=$user;
  	$result=mysqli_query($dbhandle,"SELECT from lo where username='$user' and password='$pass'");
  	echo "<script>location.href='http://localhost/demo/index.html';</script>";
 	
  }
  else
  {
  	echo"login failed";
  	echo "<script>location.href='http://localhost/demo/oglogin.php';</script>";
  	echo($pass);
  }
 echo "not possible";
}
?>
</body>
</html>