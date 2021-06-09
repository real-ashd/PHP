<!DOCTYPE html>
<html>
<head>
	<title>Form GET Method</title>
<style>
select{width:480px;padding:10px;margin:10px;align:center;}
input{width:480px;padding:10px;margin:10px;align:center;}
</style>
<?php
echo $_GET['n'];
?>
</head>
<body>
<form method="get">
	<input type="text" placeholder="Enter Your Name" name="n" />
	<p>
	<input type="submit" value="Show My Name" name="submit" />
</body>
</html>