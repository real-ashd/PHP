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
//UPDATE DATA
$sql = "UPDATE myguests1 SET lname='Deshmukh' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</html>