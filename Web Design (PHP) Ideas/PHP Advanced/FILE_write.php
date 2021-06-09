<?php
 
//write string to file
 
$data="A fish out of water";
 
file_put_contents("ashu.pdf",$data) or die('ERROR:Can not write file');
 
echo "data written inside  this file";
 
?>