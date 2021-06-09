<!DOCTYPE html>
<html>
<body>
<?php
$x=50;
$y=104;
if(is_int($x)&&is_int($y))
	{
	 $sum=$x+$y;
	 echo "SUM = $sum";
	}
else
	{echo "<br/>Both Numbers must be integers.!!!";}
$y=10.32;
if(is_int($x)&&is_int($y))
	{
	 $sum=$x+$y;
	 echo "SUM = $sum";
	}
else
	{echo "<br/>Both Numbers must be integers.!!!";}
?>
</body>
</html>