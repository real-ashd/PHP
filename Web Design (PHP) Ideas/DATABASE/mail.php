<?php
extract($_POST);
if(isset($sendmail))
{
	
    $subject ="Mail Function in PHP";
	$from="ashu@gmail.com";
	$message =$name." ".$mobile." ".$query;
    $headers = "From:".$from;
	$email=$_POST['email'];
    mail($email,$subject,$message,$headers);
  
	echo "<h3 align='center' style='color:red'>Mail Sent Successfully</h3>";
}	
 
?>
<html>
<head>
	<title>Mail function in php - Phptpoint</title>
</head>
<body>
<form method="post">
 <table align="center" border="1">
	<Tr>
	<th>Enter Your name</th>
	<td><input type="text" name="name"/></td>
	</tr>
	<tr>
		<th>Enter Your mobile</th>
		<td><input type="text" name="mobile"/></td>
	</tr>	
	<tr>
		<th>Enter Your email</th>
		<td><input type="email" name="email"/></td>
	</tr>
	
	<tr>
		<th>Enter Your Query</th>
		<td><textarea name="query"></textarea></td>
	</tr>
		
	
	<tr>
		<td align="center" colspan="2">
		<input type="submit" value="Send Mail" name="sendmail"/>
		
	</tr>
	</table>	
</form>
</body>
</html>