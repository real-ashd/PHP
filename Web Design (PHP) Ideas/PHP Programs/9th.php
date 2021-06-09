<!DOCTYPE html>
<html>
<body>
<!--PHP Variables Local Scope-->
<?php
function mytest()
	{
	 $x=5;			//Local Scope
	 echo "<p>Variable x inside this function is : $x</p>";
	}
mytest();
/* Using x inside this function will generate an Error */
echo "<p>Variable x outside the function is : $x</p>";
?>
</body>
</html>