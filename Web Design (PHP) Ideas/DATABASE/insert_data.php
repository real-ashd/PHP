<!DOCTYPE html>
<html>
<head>
<?php
$host="localhost";
$user="root";
$pass="";
//Connect to database Ashu
$dbname="Ashu";
$conn=mysqli_connect($host, $user, $pass,$dbname);
if(!$conn)
  {
	$sql1="CREATE DATABASE Ashu";
	if(mysqli_query($conn,$sql1))
		{echo "<h1>DATABASE CREATED</h1>";}
	else
		{echo "Error : ".mysqli_error($conn);}
  }
else
  {
   echo "Connection Successful to DATABASE Ashu<br/>";
  }
//Create Table
$sql2="CREATE TABLE myGuests1(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
email VARCHAR(40) NOT NULL,
pass VARCHAR(12) NOT NULL
)";
//Check if table Created or not
if(mysqli_query($conn,$sql2))
	{echo "Table myGuests1 created successfully.";}
else
	{echo "Error creating table : ".mysqli_error($conn);}
//Inserting Data in DATABASE
$sql3="INSERT INTO myGuests1(id,fname,lname,email,pass)
VALUES('','Ashu','Deshmukh','ashu@gmail.com','pass1')";
//Check if Data is inserted or not
if(mysqli_query($conn,$sql3))
	{echo "Data inserted Successful!<br/>";}
else
	{echo "Data insertion Failed!!!<br/>";}
mysqli_close($conn);
?>
</head>
</body>