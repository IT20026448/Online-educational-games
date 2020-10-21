<?php
   session_start();
   //$_SESSION['username']='administrator';
   if ($_SESSION['username']=='administrator'){

   }else{
     header("Location: ./home.html");
     exit();
   }
?>

<html>
<head>
	<title>Online Educational Games</title>
	<link rel="stylesheet" type="text/css" href="../css/contactusstyles.css">
	<script src="../js/contact.js"></script>
</head>
<body>


	<div class="topbanner">
		<ul class="menu">
			<img class="logo" src="../images/logo.png" alt="Shopping Cart Image">

			<a href="../html/useraccount.html">
				<img class="usericon" src="../images/usericon.jpg" alt="UserIcon">
			</a>
			<div class="buttonicons">
				<li class="home"><a href="../html/index.html">
					<img	onmouseout="this.setAttribute('src','../images/homebutton.png')" onmouseover="this.setAttribute('src','../images/homebuttonhover.png')" src="../images/homebutton.png">
				</a></li>
				<li><a href="../html/login.html">
					<img	onmouseout="this.setAttribute('src','../images/loginbutton.png')" onmouseover="this.setAttribute('src','../images/loginbuttonhover.png')" src="../images/loginbutton.png">
				</a></li>
				<li><a href="../html/games.html">
					<img	onmouseout="this.setAttribute('src','../images/gamesbutton.png')" onmouseover="this.setAttribute('src','../images/gamesbuttonhover.png')" src="../images/gamesbutton.png">
				</a></li>
				<li><a href="../html/contactus.html">
					<img	onmouseout="this.setAttribute('src','../images/contactusbutton.png')" onmouseover="this.setAttribute('src','../images/contactusbuttonhover.png')" src="../images/contactusbutton.png">
				</a></li>
				<li><a href="../html/about.html">
					<img	onmouseout="this.setAttribute('src','../images/aboutbutton.png')" onmouseover="this.setAttribute('src','../images/aboutbuttonhover.png')" src="../images/aboutbutton.png">
				</a></li>
			</div>
		<button class="search"type="button">Search</button>
		<input type="text" placeholder="Search..." >
		</ul>
	</div>

<ul class="verticalmenu">
	<li><a href="">Math Games</a></li>
	<li><a href="">English Games</a></li>
	<li><a href="">Science Games</a></li>
	<li><a href="">History-quiz Games</a></li>
	<li><a href="">preschool games</a></li>
	<li><a href="">Adult educational Games</a></li>
</ul>
<div class="content">
<form></form>
</div>

</body>
</html>
