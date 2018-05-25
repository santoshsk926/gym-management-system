<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "project3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
$sql = "SELECT * FROM newt";

$success = mysqli_query($conn,$sql);

if ($success)	
{
	echo"<div class='container'>";
	
	echo"<center><h1>Current Users</h1></center>";
	echo"<table class='table'>";
		echo "<tr><th>First Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>Email</th>";
		echo "<th>Phone Number</th>";
		echo "<th>Workout</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_array($success)) 
	{	echo  "<tr><td>";
        echo  $row[0];
		echo "<td>";
        echo  $row[1];
		echo "<td>";
        echo  $row[2];
		echo "<td>";
        echo  $row[3];
		echo "<td>";
        echo  $row[4];
		
		echo "</tr>";

		}
	echo "</table>";
} 
else 
{
    echo "0 results";
}


?>
</body>
</html>