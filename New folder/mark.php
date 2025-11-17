<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<!--  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
	.login {
		color: #ffffff;
		padding: 20px 14px;
		margin:20px auto;
	}
	.yu{
		font-family: sans-serif;
	}
</style><center><div id="login"><fieldset>
	<form class="yu" name="login" id="login" action="n1.php" method="request">
		<label>
		<label id="st"><center><h3>STUDENT LOGIN</h3></center></label>
		<br>
		ID:<input type="number" name="id" id="id" placeholder="enter the ID">
	</label>
	<br>
	<!-- <label>
		<br>
		Name:<input type="text" name="name" id="name" placeholder="enter the name">
	</label> -->
	<label>
		DATE<br><input type="date" name="date" id="date" placeholder="date">
	</label>
	<br>
		<label><h3>MARKS:</h3></label>
	<label>
		<br>
		Tamil<br><input type="number" name="Tamil" id="Tamil" placeholder="enter the mark">
	</label>
	<label>
		<br>
		English<br><input type="number" name="English" id="English" placeholder="enter the mark">
	</label>
	<label>
		<br>
		Maths<br><input type="number" name="Maths" id="Maths" placeholder="enter the mark">
	</label>
	<label>
		<br>
		Science<br><input type="number" name="Science" id="Science" placeholder="enter the mark">
	</label>
	<label>
		<br>
		Social<br><input type="number" name="Social" id="Social" placeholder="enter the mark">
	</label>
	<br>
 <input type="submit" value="SUBMIT" name="Submit1" id="Submit1">
 <br>
</BR></center>
</fieldset></div>
<script type="text/javascript">
	{
		document.getElementById('Sumbit1') . addEventListener('click',function () {
	alert('You have just completed in One Entry in the Table :)');
	});
</script>
</form>
<?php
include 'db.php';
?>
	<style type="text/css">
		body{background-color:#eeff8c}

	#bod{
    color:#fff;
    background-color: #000;
    padding: 4px 0px 2px;
		text-align: center;
		transition: 0.25s;
	}
	#bod:hover{
		background-color: #rd07e1;

	}
		.bod1{
    color:#000000;
    display: inline-block;
    overflow: ;
    font-style: bold;
    font-family: sans-serif;
		text-align: center;
	}
	table{
		border-collapse;
		margin-left: 550px;
	}
	r{
		text-align: center;
		background-color: #fffddd;
		border-color: #ffff;
		border: 2px solid green;
	}
	tr{
		text-align: center;
		background-color: #ffff;
		border-color: #000000;
		border: 2px solid blue;
	}
	td{
		text-align: center;
		background-color:#bef7e6;
		border-color: #000000;
		border: 2px solid goldenrod;
	}
	th{
		text-align: center;
		border: 2px solid black;
	}
	{
		color: #000;
	}
	.edit:hover {color: #rd07e1;
	}
	delete{
		background-color: #0000;
	}
	</style><center>
<div class="bod1"><thead id="r"><center><h3>MARK SHEET:</h3></center></thead></thead><table><tr><th>ID</th><th>NAME</th><th>AGE</th><th colspan="2">DATE</th><th>TAMIL</th><th >ENGLISH </th><th>MATHS</th><TH>SCIENCE</TH><th>SOCIAL</th><th>TOTAL</th><th>RESULT</th><th>DELETE</th></tr>
	<tbody>
		<?php 
		$result ="SELECT mar.id,studlist.name,studlist.age,mar.date,mar.Tamil,mar.English,mar.Maths,mar.Science,mar.Social FROM mar JOIN studlist ON studlist.id=mar.id ";
		$exe = mysqli_query($dbhandle,$result);


		
		while ($row = mysqli_fetch_assoc($exe)) {?>
		
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['age'] ?></td>
				<td colspan="2"><?php echo $row['date'] ?></td>
				<td><?php echo $row['Tamil'] ?></td>
				<td><?php echo $row['English'] ?></td>
				<td><?php echo $row['Maths'] ?></td>
				<td><?php echo $row['Science'] ?></td>
				<td><?php echo $row['Social'] ?></td>
				<td><?php $tot=$row['Tamil']+$row['English']+$row['Maths']+$row['Science']+$row['Social'];
				echo $tot ?></td>
				<td><?php 
				if($tot>250)
				{
echo "pass";
				}
				else
				{
echo "fail";
				}
				 ?></td>

				<td id="delete"><a href="delete.php?id=<?php echo $row['id']?>">delete</a></td>
			
	</tbody>
<?php }?>
</div></table></center>
</body>
</html>