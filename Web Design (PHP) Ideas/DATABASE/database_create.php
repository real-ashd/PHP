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

//Create DATABASE
$sql="CREATE DATABASE ASHU";
if(mysqli_query($conn,$sql))
{echo "<h1>DATABASE CREATED</h1>";}
else
{echo "Error : ".mysqli_error($conn);}
mysqli_close($conn);
?>