<!DOCTYPE html>
<html>
<head>
	<title>ADD 2 Numbers & display Result in textbox</title>
<style>
input{padding:10px;margin:10px;align:center;width:480px;box-shadow:2px 2px 15px grey;}
</style>
<?php
if(isset($_POST['add']))
	{
	 $x=$_POST['fnum'];
	 $y=$_POST['snum'];
	 $sum=$x+$y;
	 echo "Result :<input type='text' value='$sum' readonly='' />";
	}
?>
</head>
<body bgcolor="blue">
<p>
<form method="post">
<input type="text" name="fnum" required autofocus placeholder="Enter First Number" /><br/>
<input type="text" name="snum" required placeholder="Enter Second Number" /><br/>
<input type="submit" name="add" value="ADD + " />
</form>
</body>
</html>