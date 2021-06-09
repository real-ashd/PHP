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
   echo "Connection Failed to DATABASE Ashu!!!!<br/>",mysqli_error($conn);
  }
else
  {
   echo "Connection Successful to DATABASE Ashu<br/>";
  }
//Create Table
$sql1="CREATE TABLE myGuests1(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
email VARCHAR(40) NOT NULL,
pass VARCHAR(12) NOT NULL
)";
//Check if table Created or not
if(mysqli_query($conn,$sql1))
	{echo "Table myGuests1 created successfully.";}
else
	{echo "Error creating table : ".mysqli_error($conn);}
//Inserting Data in DATABASE
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
if($fname && $lname && $email && $pass)
{
	$sql2="INSERT INTO myGuests1(id,fname,lname,email,pass)
	VALUES('','$fname','$lname','$email','$pass')";
	if(mysqli_query($conn,$sql2)){
		$last_id = mysqli_insert_id($conn);
		echo "Data Inserted. Last element id is $last_id ";
		
	}else{
	echo "NAhi Hua insert data".mysqli_error($conn);
	}
}
else{echo "All the fields must be filled";}
mysqli_close($conn);
?>
</head>
<form method="POST">
First Name : <input type="text" name="fname" /><br/>
Last Name : <input type="text" name="lname" /><br/>
Email : <input type="email" name="email" /><br/>
Password : <input type="pass" name="pass" /><br/>
<p>
<input type="submit" />
</form>
</body>
</html>