<?php
$host="localhost";
$user="root";
$pass="";
//Create DATABASE
$sql="CREATE DATABASE ASHU";
if(mysqli_query($conn,$sql))
{echo "<h1>DATABASE CREATED</h1>";}
else
{echo "Error : ".mysqli_error($conn);}

//Create Table
$sql="CREATE TABLE myGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(40) NOT NULL,
reg_date TIMESTAMP,
password VARCHAR(12) NOT NULL
)";
//Check if table Created or not
if(mysqli_query($conn,$sql))
	{echo "Table myGuests created successfully.";}
else
	{echo "Error creating table : ".mysqli_error($conn);}
mysqli_close($conn);
?>