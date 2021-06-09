<?php
$a="ashu1234";
$enc1=base64_encode($a);
echo $a."<br>".$enc1."<br>";
$enc2=base64_encode($enc1);
echo $enc2."<br>";
$enc3=base64_encode($enc2);
echo $enc3."<br>";
$a1=base64_decode($enc3);
$a2=base64_decode($a1);
$a3=base64_decode($a2);
echo $a1."<br>";
$b="WVhOb2RURXlNelE9";
$b1=base64_decode($b);
echo $b1."<br>";
$b2=base64_decode($b1);
echo $b2;
$pass=md5($b2);
echo "<br>".$pass;
?>