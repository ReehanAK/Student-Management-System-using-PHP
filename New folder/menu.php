<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>menu</title>
</head>
<body>
	<style type="text/css">
		ul{
text-transform:uppercase;
text-align:right;
display:inline;
flex-direction: column;
margin: 0;
padding:20px 5px 24px 0;
list-style:none;
 align-items: center;
-webkit-box-shadow:0 0 20px rgba(0,0,0,0.15);
-moz-box-shadow:0 0 5px rgba(0,0,0,0.15);
box-shadow: 0 0 5px rgba(0,0,0,0.15);
}
ul li{
	font:bold 12px/18px sans-serif;
	display:inline-block;
	margin-right: -5px;
	position: relative;
	padding: 20px 20px;
	background: steelblue;
	color:whitesmoke;
	cursor:pointer;
	-webkit-transition:all 0.2s;
-moz-transition:all 0.2s;
-ms-transition:all 0.2s;
-o-transition:all 0.2s;
transition:all 0.2s;
}
ul li:hover{
	background: black;
	color:black;
}
li{
	text-transform:uppercase ;
}
a{
	color: white;
}
}
</style><center>
<div id="lil">
<nav>
<ul>
<li>
<a href="http://localhost:8080/demo/index.html">HOME</a>
</li>
<li>
<a href="http://localhost:8080/demo/ent.php">ENTRY</a>
</li>
<li>
<a href="http://localhost:8080/demo/rdbms.php">Request</a>
</li>
<li><a href="http://localhost:8080/demo/ind.php">STUDENTS LIST</a>
</li>
<li><a href="http://localhost:8080/demo/loginout.php">out</a> 
</li>
</div></center>
<script type="text/javascript">const </script>
<script>
	document.getElementById('ll') . addEventListener('click',function () {
	alert('Are you willing to enter inside this page :)');
	});
</script>
<?php include'db.php';?>
</body>
</html>
</body>
</html>