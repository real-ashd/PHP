<?php
$a="abc";
$salt=base64_decode($a);
function hashpass($str,$salt){
	$str=crypt($str,'$7$'.$salt.'$');
	return $str;
}
$pass=hashpass('hi buddy',$salt);
echo $pass."<br>";
?>