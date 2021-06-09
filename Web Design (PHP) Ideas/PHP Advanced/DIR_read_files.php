<?php
 
$od =  opendir("mydocs");
 
while($files =  readdir("mydocs"))
 
{
 
echo $files."<br/>";
 
}
 
?>