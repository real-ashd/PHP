<!DOCTYPE html>
<html>
<head>
<?php
$host="localhost";
$user="root";
$pass="";
//Connect to database Ashu
$dbname="jobportal1";
$conn=mysqli_connect($host, $user, $pass,$dbname);
if(!$conn)
  {
   echo "Connection Failed to DATABASE!!!!<br/>",mysqli_error($conn);
  }
else
  {
   echo "Connection Successful to DATABASE<br/>";
  }
$sql="SELECT fname,lname FROM candidate WHERE id_can='1003'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	//output data of row
	while($row=mysqli_fetch_assoc($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
	}
}

$to = "ashwinidatey9983@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body style='color:red'>
<p></p>
<table border='2'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>". $fname."</td>
<td>". $lname."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
mysqli_close($conn);
?>
</html>