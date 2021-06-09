<?php
 
//read file into array chunks
$fo=fopen('http://www.google.com','r') or die('ERROR: cannot open file');
 
while(!feof($fo))
 
 {
 
	 $str.=fgets($fp,512);  
 
 }
 
echo $str;
 
fclose($fo);
 
?>