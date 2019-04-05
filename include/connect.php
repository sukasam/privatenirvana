<?php  
	$conn = mysqli_connect("localhost","root","","x2");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	mysqli_query($conn,"SET NAMES UTF8");
	/*$conn = mysql_connect("localhost","sukasamc_sptools","sptools") or die("connection to db fail");
	mysql_select_db("sukasamc_sptools");
	mysqli_query($conn,"SET NAMES UTF8")*/
?>