<?php 

	$username = "sql5424325";
	$password = "9WMQeHD9uI";
	$server = "sql5.freesqldatabase.com";
	$db = "sql5424325";

	$conn = mysqli_connect($server,$username,$password,$db);
	
	if ($conn) {
		echo "connected";
	} else {
		echo "not connected";
	}

 ?>
