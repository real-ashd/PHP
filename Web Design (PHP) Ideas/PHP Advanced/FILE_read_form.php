<?php
 
if(isset($_POST['disp']))
 
{
 
	$f=$_POST['file'];
 
	$ext=$_POST['ext'];
 
	$file=$f.$ext;
 
	if(file_exists($file))
 
	{
 
	$fo = fopen($file,"r");
 
	$contents = fread($fo,filesize($file));
 
	}
 
	else
 
	{
 
	echo "<font color='red'>file doesn't  exists</font>";
 
	}
 
}
 
?>
 
<form method="post">
 
enter your file<input type="text" name="file"/><br/>
 
choose your extension<select name="ext">
	<option value="">choose ur exten</option>
	<option>.txt</option>
	<option>.docs</option>
	<option>.pdf</option>
</select><br/>
 

 
   <input type="submit" value="Disp" name="disp"/><p/>
 
your contents<textarea rows="10" cols="30" name="data">
 
      <?php echo @$contents ; ?>
 
       </textarea><br/>
</form>