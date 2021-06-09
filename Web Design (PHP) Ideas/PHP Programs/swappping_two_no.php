<!DOCTYPE html>
<html>
<body>
<?php
//How to swap Two Numbers using PHP
extract($_POST);
if(isset($swap))
   {
	$x=$fn;			//First Number
	$y=$sn;			//Second Number
	$z=0;
	echo "<h1>Before Swapping the numbers</h1>";
	echo "<p align=center>First number is : $x<br/>";
	echo "Second number is : $y <br/>";
	//Now put x's value in $z
	$z=$x;
	$x=$y;
	$y=$z;
	echo "<h1>After Swapping the numbers</h1>";
	echo "<p align=center>First number is : ".$x."<br/>";
	echo "Second number is : $y <br/>";
   }
?>
<!--End of PHP Script-->

<form method="post">
<table align="center">
	<tr>
		<td>Enter First Number </td>
		<td><input type="text" name="fn" required autofocus /></td>
	</tr>
	<tr>
		<td>Enter Second Number </td>
		<td><input type="text" name="sn" required /></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="swap" value="Swap Numbers"/></td>
	</tr>
</table>
</form>
</body>
</html>