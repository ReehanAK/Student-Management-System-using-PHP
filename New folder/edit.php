<?php 
include 'db.php';
$id=$_GET['id'];
$result ="SELECT *FROM studlist where id='$id'";
$exe = mysqli_query($dbhandle,$result);
$array= mysqli_fetch_assoc($exe);	
?>
<?php session_start(); if(!isset($_SESSION['userid']))?> 
<html>
<head>
<title>SELECT</title>
</head>
<body background="em1.jpg">
	<center><h1><b>ENTER THE DETAILS:</b></h1></center>
<br>
<div class="login">
<form method="request">
	<label>
		<br>
		ID:<input type="number" name="id" id="id" value="<?php echo $array['id']?>" placeholder="enter the ID">
	</label>
	<br>
	<label>
		<br>
		Name:<input type="text" name="name" id="name" value="<?php echo $array['name']?>" placeholder="enter your name">
	</label>
	<br>
	<label>
		<br>
		Age:<input type="number" name="age" id="age"value="<?php echo $array['age']?>" placeholder="enter your age">
	</label>
	<br><br><a href="http://localhost:8080/demo/ind.php"><input type="submit" value="SUBMIT" name="Submit1" id="Submit1" action="http://localhost:8080/demo/ind.php"> <br/>
</form>
</div>
<div>
	<style>
      .login {
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }
      b {
        color: green;
      }
    </style>
</div>
<?php
if(isset($_GET['Submit1'])){
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$age=$_REQUEST['age'];
$query = "UPDATE studlist SET id='$id',name='$name', age='$age' where id='$id'";  //update q
$exequery=mysqli_query(	$dbhandle,$query);
if($exequery)
{?><center ><?php echo "<script>alert('Updated successfully')</script>";header("Location:http://localhost:8080/demo/ind.php");}else?></center>
<?php{
	echo "Not Updated successfully";
}?><?php
}
?>
</body>
</html>