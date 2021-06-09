<?php	
 
//first start session environment
 session_start(); 
	
// retrieve session data
if(isset($_SESSION['user']))
{	
echo "Welcome ".$_SESSION['user']."<br/>";
	
echo "Your profile is ".$_SESSION['profile'];  
}
?>