<!DOCTYPE html>
<html>
<body>
<!--PHP the static Keyword-->
<?php
function mytest()
	{
	 static $x=0;
	 echo $x;
	 $x++;
	}
mytest();
echo "<br>";
mytest();
echo "<br>";
mytest();
echo "<br>";
mytest();
echo "<br>";
mytest();
echo "<br>";
mytest();
echo "<br>";
mytest();
echo "<br>";
mytest();
echo "<br>";
mytest();
echo "<br>";
mytest();

?>
</body>
</html>