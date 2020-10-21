<?php
	require 'config.php';
?>

<?php
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$emailInDB ="SELECT Email FROM login WHERE Email = $email";
	$passInDB = "SELECT Password FROM login WHERE Password = $password";
	$name = "SELECT Name from login WHERE Email = $email";
	
	$sql = "select * from item";
	$result = $conn->query($sql);
						
	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc())
		{
			$row["Email", "Password", "Name"];
			
			if($email == $emailInDB && $pass == $passInDB)
			{
				echo "<script> alert('Login successful') </script>";
				echo "<script> Welcome $name </script>";
			}
			else
			{
				echo "<script> alert('Invalid password!!! Please re-enter password') </script>";
			}
		}
	}
	else
	{
		echo "0 results";
	}
						
	
		
	
	mysqli_close($conn);
?>
