<?php
	require 'config.php';
?>

<?php
	$email = $_POST["email"];
	$pass = $_POST["password"];
	
	$sql = "select Email, Password from login";
	$result = $conn->query($sql);
						
	while($row = $result->fetch_assoc())
	{
		if($email == $row["Email"] && $pass == $row["Password"])
		{
			header("Location:useraccount.html");
		}
	}
	
	$conn->close();
?>
