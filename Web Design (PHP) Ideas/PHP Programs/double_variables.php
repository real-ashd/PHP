<!DOCTYPE html>
<html>
<body>
<?php
//Double Variable or Variable's Variable
$name="Ashu";
$$name="Kishor";
echo $name."<br/>";
echo $$name."<br/>";
echo $Ashu."<p/>";

${${$name}}="Deshmukh";
echo $name." ".$$name." ".${${$name}}.".";
?>
</body>
</html>