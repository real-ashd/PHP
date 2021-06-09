<?php
 
//read file into array
 
$arr=file('output.txt') or die('ERROR: cannot file file');
 
foreach($arr as $line)
 
{
 
echo $line;
 
} 
 
?>