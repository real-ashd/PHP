<!DOCTYPE html>
<html>
<head>
	<title>POST Method</title>
<style>
input{padding:10px;margin:10px;align:center;width:480px;box-shadow:2px 2px 15px grey;}
</style>
<?php
echo $_POST['n'];
?>
</head>
<body bgcolor="blue">
<form method="post">
<input type="text" name="n" required autofocus placeholder="Enter your Name" /><br/>
<input type="submit" name="sub" value="SHOW MY NAME" />
</form>
</body>
</html>