<?php
 
//open and lock file 
 
//write string to file
 
//unlock and close file
 
$data="A fish can swim water"; 
 
$fo=fopen("output.txt","w");
 
flock($fo,LOCK_EX) or die('ERROR:cannot lock file');
 
fwrite($fo,$data);
 
flock($fo,LOCK_UN) or die('ERROR:cannot unlock file');
 
fclose($fo);
 
echo "Data written to file";
 
?>