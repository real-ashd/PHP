<!DOCTYPE html>
<html>
<body>
<?php
//Create a constant and assign your name
define('Name',"Ashutosh");
echo "Hello ".Name;

//Sum of two numbers using Constant
define('One',"100");
define('Two',"200");
define('Sum',One+Two);
echo "<br/>Sum of two constant = ".Sum;

//Sum of two numbers using Constant and assign the result in Variable
$res=One+Two;
echo "<br/>Sum of two constants = ".$res;
?>
</body>
</html>