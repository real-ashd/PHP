 <?php
 
session_start();
 
if(@$_POST['submit1'])
 
{
 
	$u = $_POST['text1'];
 
	$p = $_POST['pwd'];
 
	if($u =="sanjeev@gmail.com" && $p=="san123")
 
	{
 
	$_SESSION['luser'] = $u;
 
	$_SESSION['start'] = time();
 
	 // taking now logged in time
	$_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ; 
 
	// ending a session in 5  minutes from the starting time
	header('Location: HomePage.php');
 
	}
 
	else
 
	{
 
	$err= "<font color='red'>Invalid user login </font>";
 
	}
 
}
 
?>
 
<html>
 
<head>
 
	<title>Destroy Session after 5 minutes - Phptpoint.com</title>
 
</head>
 
<body>
 
<form name="form1" method="post">
 
<table align="center">
 
	<tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</tr>	
 
	<tr>
 
		<td>Username </td>
 
		<td><input type="email" name="text1"  placeholder="sanjeev@gmail.com" required>
 
		</td>
 
	</tr>
 
	<tr>
 
		<td>Password</td>
 
		<td><input type="password" name="pwd" placeholder="san123" required></td>
 
	</tr>
 
	<tr>
 
		<td colspan="2"  align="center">
 
		<input type="submit" value="SignIn" name="submit1">
 
		</td>
 
	</tr>
 
</table>
 
</form>
 
</body>
 
</html>