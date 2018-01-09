<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<?php
	session_start();
	if($_SESSION['username'])
	{
		echo "Welcome ".$_SESSION['username']."<br>";
		echo "<a href='Mysql5.php'>Logout</a>";
	}
	else
	{
		header("location:../Mysql.php");
	}
?>
<button type="button" class="btn btn-success"><a href="Mysql6.php">AS A SUPLIER</a></button>
<button type="button" class="btn btn-success"><a href="Mysql8.php">AS A BUYER</button>

</body>
</html>