 <?php
$host="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($host, $user, $pass);
//Connect to database Ashu
$sql1="CREATE DATABASE Ashu";
if(mysqli_query($conn,$sql1))
	{echo "<h1>DATABASE CREATED</h1>";}
$dbname="Ashu";
$conn=mysqli_connect($host, $user, $pass,$dbname);
//Create Table
$sql2="CREATE TABLE myGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
email VARCHAR(40) NOT NULL,
pass VARCHAR(12) NOT NULL
)";
//Check if table Created or not
if(mysqli_query($conn,$sql2))
	{echo "Table myGuests created successfully.";}

$sql = "INSERT INTO MyGuests (fname, lname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (fname, lname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (fname, lname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 