<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBname = "online educational games";
	
	$conn = new mysqli($servername, $username, $password, $DBname);
	
	if ($conn->connect_error)
	{
		die("Connection failed: ") . $conn->connect_error;
	}
	
	echo "<script> alert('Connected successfully') </script>";
?>