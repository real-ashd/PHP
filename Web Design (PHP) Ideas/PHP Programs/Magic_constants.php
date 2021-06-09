<!DOCTYPE html>
<html>
<body>
<?php
echo "The Line Number is : ".__LINE__;
echo "<br>Your File Name is : ".__FILE__;
//__FUNCTION__ , __CLASS__ & __METHOD__
class demo
{
 function test()
	{
	 echo "<br/>Function of demo class : ".__FUNCTION__;
	}
 function testme()
	{
	 echo "<br/>Method of demo class : ".__METHOD__;
	 echo "<br/>Class : ".__CLASS__;
	}
}
$object=new demo();
$object->test();
$object->testme();
?>
</body>
</html>