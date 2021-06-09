<?php
session_start();

if(isset($_SESSION['username']))
{
	echo "Welcome <b>".$_SESSION['username']."</b>. You are ".$_SESSION['age'];
}
else
{
	echo "Please login First";
}

?>