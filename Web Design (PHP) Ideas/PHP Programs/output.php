<!DOCTYPE html>
<html>
<head>
	<title>Output of the Form</title>
<style>
input,textarea{padding:10px;margin:10px;align:center;width:480px;box-shadow:2px 2px 15px grey;}
</style>
</head>
<body bgcolor="blue">
<form method="post"><pre>
Name     : <input type="text" value="<?php echo $_POST['name'] ?>" readonly="" /><br/>
Email    : <input type="email" value="<?php echo $_POST['email'] ?>" readonly="" /><br/>
Password : <input type="password" value="<?php echo $_POST['pass'] ?>" readonly="" /><br/>
Mob. No. : <input type="text" value="<?php echo $_POST['no'] ?>" readonly="" /><br/>
Address  : <textarea readonly="readonly"><?php echo $_POST['address'] ?></textarea><br/>
</pre></form>
</body>
</html>