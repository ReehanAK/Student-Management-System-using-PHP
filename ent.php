<html>
<head>
<title>SELECT</title>
</head>
<body background="em1.jpg">
	<?php include'menu.php';?>
	<?php  
	session_start(); if(!isset($_SESSION['userid']))header("Location:http://localhost:8080/demo/oglogin.php")?> 
	<center><h1><b>ENTER THE DETAILS:</b></h1></center>
<br>
	<style type="text/css">
		body{background-color:#FbFbFb}
		.login{
			text-align: center;
}
   .login {
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
      }
      b {
        color: green;
      }
	</style>
<div class="login">
<form method="request">
	<label>
		<br>
		ID:<input type="number" name="id" id="id" placeholder="enter the ID">
	</label>
	<br>
	<label>
		<br>
		Name:<input type="text" name="name" id="name" placeholder="enter your name">
	</label>
	<br>
	<label>
		<br>
		Age:<input type="number" name="age" id="age" placeholder="enter your age">
	</label>
	<br><br><a href="http://localhost:8080/demo/index.html"><input type="submit" value="SUBMIT" name="Submit1" id="Submit1"> <br/>
</form>
</div>
<?php
include 'db.php';
if(isset($_REQUEST['Submit1'])){
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$age=$_REQUEST['age'];
$query = "INSERT INTO studlist(id,name,age) values ('$id', '$name', '$age' )";
$exequery=mysqli_query(	$dbhandle,$query);
if($exequery)
{
	"<center><h6><script>alert(booom!)</script>INSERTED SUCCESSFULLY</h6></center>";}else
{
	echo("not");
	exit;
}
}
?>
</body>
</html>