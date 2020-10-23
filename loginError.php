<?php
	session_start();
?>
<?php
	require 'config.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Educational Games</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/formStyle.css">
		<link rel="stylesheet" type="text/css" href="css/contactusstyles.css">
		<script src="js/contact.js"></script>
	</head>
	<body>
		<div class="topbanner">
			<ul class="menu">
				<img class="logo" src="images/logo.png" alt="Shopping Cart Image">

				<a href="useraccount.php"> <img class="usericon" src="images/usericon.jpg" alt="UserIcon">	</a>
				<div class="buttonicons">
					<li class="home"><a href="home.php">
						<img onmouseout="this.setAttribute('src','images/homebutton.png')" onmouseover="this.setAttribute('src','images/homebuttonhover.png')" src="images/homebutton.png">
					</a></li>
					<li><a href="login.php">
						<img onmouseout="this.setAttribute('src','images/loginbutton.png')" onmouseover="this.setAttribute('src','images/loginbuttonhover.png')" src="images/loginbutton.png">
					</a></li>
					<li><a href="games.php">
						<img onmouseout="this.setAttribute('src','images/gamesbutton.png')" onmouseover="this.setAttribute('src','images/gamesbuttonhover.png')" src="images/gamesbutton.png">
					</a></li>
					<li><a href="contactus.php">
						<img onmouseout="this.setAttribute('src','images/contactusbutton.png')" onmouseover="this.setAttribute('src','images/contactusbuttonhover.png')" src="images/contactusbutton.png">
					</a></li>
					<li><a href="about.php">
						<img onmouseout="this.setAttribute('src','images/aboutbutton.png')" onmouseover="this.setAttribute('src','images/aboutbuttonhover.png')" src="images/aboutbutton.png">
					</a></li>
				</div>
				<button class="search"type="button">Search</button>
				<input type="text" placeholder="Search..." >
			</ul>
		</div>
		<ul class="verticalmenu">
			<li><a href="maths.php">Math Games</a></li>
			<li><a href="english.php">English Games</a></li>
			<li><a href="scienceGames.php">Science Games</a></li>
			<li><a href="history.php">History-quiz Games</a></li>
			<li><a href="pre-school-games.php">Pre-school games</a></li>
			<li><a href="adult.php">Adult educational Games</a></li>
		</ul>
		<br> <br> <br> <br> <br> <br>
		<b><center> <h1> Online Educational Games </h1> <br>
			<h2> Invalid username or password!!! </h2> 
			<h3> Please re-enter login credentials </h2>
		</center>
		</b>
	<br>
	<div id = "table" class = "formInput" class = "formText">
		<?php
			echo "<form method = 'POST' action ='submitLogin.php'>
				<br><label class = 'formText'> Email </label> <br>
				<input type = 'text' id = 'email' name = 'email' class = 'formInput' style = 'width:300px;' placeholder = 'name@domain.com' pattern = '[a-zA-Z0-9._+%-]+@[a-z0-9]+\.[a-z]{2,3}' required> <br> <br>
				
				<label class = 'formText'> Password </label> <br>
				<input type = 'password' id = 'pass' name = 'password' class = 'formInput' style = 'width:300px;' placeholder = 'Password'> <br> <br>
			
				<button input='submit' style = 'width: 60%; margin-left: 20%' class = 'formText'> Login </button> <br> <br>
				<button style = 'width: 60%; margin-left: 20%;' class = 'formInput'> <a href='register.php'> Create account </a> </button> <br> <br>
				<button style = 'width: 60%; margin-left: 20%;' class = 'formInput'> <a href='reset.php'> Forgot password </a> </button> <br> <br>
				</form>";
			?>
	</div>
		
	</body>
	<br> <br> <hr border = "1" color = "black">
	<img src = "images/payment.jpg" style = "width:20%; margin-left: 210px">
	<a href="contactus.php" style = "margin-left: 35%;"> Contact Us | </a>
	<a href="privacy.php"> Privacy policy | </a>
	<a href="terms.php"> Terms and conditions </a>
</html>