<?php
$host="localhost";
$user="root";
$pass="";

//Connecting DATABASE
$conn=mysqli_connect($host, $user, $pass);
if(!$conn)
  {
   echo "Connection Failed!!!!<br/>";
  }
else
  {
   echo "Connection Successful<br/>";
  }
?>