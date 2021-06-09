<?php
	
//first start session environment
 
session_start(); 
	
// store data in session variable through user
 
$_SESSION['user']= $_POST['un'];
 
$_SESSION['profile']= $_POST['prof']; 

 
?>
 
<html>
 
<body>
 
	<form method="post" action="retrieveSession.php">
 
		Enter your user name <input type="text" name="un"/><hr/>
 
		Enter your profile  <input type="text" name="prof"/><hr/>
 
		<input type="submit" name="login" value="login"/>
 
	</form>
 
 </body>
 
</html>