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
$sql="SELECT id,fname,lname,email,pass FROM myguests1 WHERE id='3'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
	//output data of row
	while($row=mysqli_fetch_assoc($result))
	{
		echo "id:" . $row['id']."<br/>First Name:" . $row['fname']."<br/>Last Name".$row['lname']."<br/>Email : ".$row['email']."<br/>Pass: ".$row['pass']."<br/>";
	}
}
 else
{
	echo "0 results";
}
mysqli_close($conn);
?>
</html>