<!DOCTYPE html>
<html>
<head>
	<title>Sum of two Numbers</title>
<style>
input{padding:10px;margin:10px;align:center;width:480px;box-shadow:2px 2px 15px grey;}
</style>
<?php
$x=$_GET['f'];
$y=$_GET['s'];
$z=$x+$y;
echo "SUM = ".$z;
?>
</head>
<body bgcolor="blue">
<form method="get">
<input type="text" name="f" required autofocus placeholder="Enter First Number" title="Numeric Values Only" /><br/>
<input type="text" name="s" required placeholder="Enter Second Number" title="Numeric Values Only" /><br/>
<input type="submit" name="sub" value="ADD" />
</form>
</body>
</html>