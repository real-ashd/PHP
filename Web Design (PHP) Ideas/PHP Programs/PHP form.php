<!DOCTYPE html>
<html>
<head>
	<title>Form Method</title>
<style>
select{width:480px;padding:10px;margin:10px;align:center;}
input{width:480px;padding:10px;margin:10px;align:center;}
</style>
<?php
error_reporting(1);
$type=$_POST['seltype'];
$color=$_POST['txtcolor'];
echo "<font color='blue'>Your $color $type is ready. Drive Safely!</font>";
?>
</head>
<body>
<form method="post">
	<h2 align="center">Select Your Car</h2>
	<select name="seltype">
		<option>Porsche 911</option>
		<option>Volkswagen Beetle</option>
		<option>Ford Taurus</option>
	</select>
	<p>
	<input type="text" placeholder="Color of Car" name="txtcolor" />
	<p>
	<input type="submit" value="Result" name="submit" />
</body>
</html>