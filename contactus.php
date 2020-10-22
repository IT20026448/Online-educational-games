<!DOCTYPE html>
<html>
<head>
	<title>Online Educational Games</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/contactusstyles.css">
	<script src="js/contact.js"></script>
</head>
<body>


	<div class="topbanner">
		<ul class="menu">
			<img class="logo" src="images/logo.png" alt="Shopping Cart Image">

			<a href="useraccount.html">
				<img class="usericon" src="images/usericon.jpg" alt="UserIcon">
			</a>
			<div class="buttonicons">
				<li class="home"><a href="home.html">
					<img	onmouseout="this.setAttribute('src','images/homebutton.png')" onmouseover="this.setAttribute('src','images/homebuttonhover.png')" src="images/homebutton.png">
				</a></li>
				<li><a href="login.html">
					<img	onmouseout="this.setAttribute('src','images/loginbutton.png')" onmouseover="this.setAttribute('src','images/loginbuttonhover.png')" src="images/loginbutton.png">
				</a></li>
				<li><a href="games.html">
					<img	onmouseout="this.setAttribute('src','images/gamesbutton.png')" onmouseover="this.setAttribute('src','images/gamesbuttonhover.png')" src="images/gamesbutton.png">
				</a></li>
				<li><a href="contactus.html">
					<img	onmouseout="this.setAttribute('src','images/contactusbutton.png')" onmouseover="this.setAttribute('src','images/contactusbuttonhover.png')" src="images/contactusbutton.png">
				</a></li>
				<li><a href="about.html">
					<img	onmouseout="this.setAttribute('src','images/aboutbutton.png')" onmouseover="this.setAttribute('src','images/aboutbuttonhover.png')" src="images/aboutbutton.png">
				</a></li>
			</div>
		<button class="search"type="button">Search</button>
		<input type="text" placeholder="Search..." >
		</ul>
	</div>

<ul class="verticalmenu">
	<li><a href="maths.html">Math Games</a></li>
	<li><a href="english.html">English Games</a></li>
		<li><a href="scienceGames.html">Science Games</a></li>
		<li><a href="history.html">History-quiz Games</a></li>
	<li><a href="pre-school-games.html">Pre-school games</a></li>
	<li><a href="adult.html">Adult educational Games</a></li>
</ul>
<img class="supportImg" src="images/support.jpg" alt="support image">

<form class="contactusform" id="contactusform" action="../php/message.php" method="get">
<h1 class="heading"><b>Contact Us</b></h1>
<p class="underheading">Please type your message below, it will be sent directly to our support staff</p>
<br>
<input type="email" placeholder="Enter your email" required class="email">
<textarea rows="5" cols="20"></textarea>
<br>
<input name="submitbtn" type="submit" value="Submit" class="tbuttons">
</form>

</body>
<br> <br> <hr border = "1" color = "black">
<img src = "images/payment.jpg" style = "width:20%; margin-left: 210px">
<a href="contactus.html" style = "margin-left: 35%;"> Contact Us | </a>
<a> Privacy policy | </a>
<a> Accessibility </a>
</html>
