<!DOCTYPE html>
<html lang="en">
<head>
<title>Gym Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php
	require('config.php');
		if (isset($_POST['submit'])) 
		{
			$t1 = $_REQUEST['t1'];
			$t2 = $_POST['t2'];
			$email = $_POST['email'];
			$t3 = $_POST['t3'];
			$option = $_POST['option'];
			$sql="INSERT INTO `newt`(`firstname`, `lastname`, `email`, `phonenumber`, `tow`) VALUES ('" . $t1 . "','" . $t2 ."','" . $email. "','" . $t3 . "','" . $option . "')"; 
			
			
			 
			$resp = @mysqli_query($conn,$sql);
			echo "<center><h1>Database Have Been Updated<h1></center>"; 
        }
		/*if(mysqli_query($conn, $sql))
		{
		echo "Records added successfully.";
        }
		else
		{
         echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }*/

mysqli_close($conn);
?>
</body>
</html>