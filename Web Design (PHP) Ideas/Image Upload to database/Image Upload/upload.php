<?php
 
	if ($_POST['upload'] )
 
	 {
 
	   move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);  
 
       echo "Upload: " . $_FILES["file"]["name"] . "<br>";
 
       echo "Type: " . $_FILES["file"]["type"] . "<br>";
  
       echo "Stored in: " . $_FILES["file"]["tmp_name"];
 
     }  
    
?>