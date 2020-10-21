<?php
	require 'config.php';
?>

<?php
	$name = $_POST["fullName"];
	$email = $_POST["email"];
	$pass = $_POST["password"];
	
	$sql = "INSERT INTO login(Email, Password, Name) values('$email', '$pass', '$name')";
	
	if(mysqli_query($conn, $sql))
	{
		echo "<script> alert('Account created successfully!!!') </script>";
	}
	else
	{
		echo "<script> alert('Error!!! Unable to register, please try again!') </script>";
		header("Location:register.php");
	}
	header("Location:register.php");
	mysqli_close($conn);	
?>