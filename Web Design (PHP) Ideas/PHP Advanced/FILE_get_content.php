<?php
 
//read file into string
 
$str=file_get_contents('output.txt') or die('ERROR:cannot find the file');
 
echo $str;
 
?>
