<?php
 
//read file into array
$arr=file('http://www.google.com') or die('ERROR: cannot file file');
 
foreach($arr as $line)
 
{
 
echo $line."HIIIIIIIIIIIIIII";
 
} 
 
?>