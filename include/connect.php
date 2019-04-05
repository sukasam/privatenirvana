<?php  
	$conn = mysqli_connect("localhost","root","","privatenirvana");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	mysqli_query($conn,"SET NAMES UTF8");
?>