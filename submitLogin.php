<?php
	require 'config.php';
?>

<?php
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$emailInDB = "SELECT Email FROM login WHERE Email = $email";
	$passInDB ="SELECT Password FROM login WHERE Password = '$password'";
	
	if("select strcmp('$pass', '$passInDB')" == 0)
	{
		echo "<script> alert('Login successful') </script>";
		header("Location:home.html");
	}
	else
	{
		echo "<script> alert('Invalid password!!! Please re-enter password') </script>";
	}
		
	
	mysqli_close($conn);
?>