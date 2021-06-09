<!DOCTYPE html>
<html>
<head>
	<title>USE of Extract Function</title>
<style>
input,select{padding:10px;margin:10px;align:center;width:480px;box-shadow:2px 2px 15px grey;}
</style>
<?php
extract($_POST);
if(isset($save))
{
	 echo "<center>Your Name      : $fn<br/>";
	 echo "Your Last Name : $ln<br/>";
	 echo "Your Email ID  : $eid<br/>";
	 echo "Your Course    : $course<br/>";
	 echo "</center>";
	}
?>
</head>
<body bgcolor="blue">
<form method="post">
<input type="text" name="fn" required autofocus placeholder="Enter your First Name" /><br/>
<input type="text" name="ln" required placeholder="Enter your Last Name" /><br/>
<input type="email" name="eid" required placeholder="Enter your Email ID" /><br/>
<select name="course">
	<option>PHP</option>
	<option>JAVA</option>
	<option>PERL</option>
</select><br/>
<input type="submit" name="save" value="Save" />
</form>
</body>
</html>