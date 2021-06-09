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
  
$sql = "DELETE FROM myguests1 WHERE id='3'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}  


mysqli_close($conn);
?>
</html>