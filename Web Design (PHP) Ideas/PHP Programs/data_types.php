<!DOCTYPE html>
<html>
<body>
<?php
//PHP Data Types
$x1=10;
$x2=10.666;
$y1=true;
$y2=false;
$cars=array("Volvo","BMW","Toyota");
class car
{
 function Car()
	{$this->model="Activa 4G";}
}
//Creating an object
$herbie=new car();
echo "<br/>";
var_dump($x1);
echo "<br/>";
var_dump($x2);
echo "<br/>";
var_dump($y1);
echo "<br/>";
var_dump($y2);
echo "<br/>";
var_dump($cars);
echo "<br/>";
//Show object Properites
echo $herbie->model;
?>
</body>
</html>