<?php
   session_start();
   require 'config.php';
   $_SESSION['username']='administrator';//for testing remove later
   if ($_SESSION['username']=='administrator'){

   }else{
     header('HTTP/1.0 403 Forbidden');
     echo ' 403 Forbidden<br>';
     echo 'Redirecting to home page in 3 seconds';
     header('refresh:3; url=./home.html');
     exit();
   }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Online Educational Games</title>
		<link rel="stylesheet" type="text/css" href="styles/contactusstyles.css">
	</head>
	<body>
		<div class="topbanner">
			<ul class="menu">
				<img class="logo" src="images/logo.png" alt="Shopping Cart Image">

				<a href="useraccount.html"> <img class="usericon" src="images/usericon.jpg" alt="UserIcon">	</a>
				<div class="buttonicons">
					<li class="home"><a href="home.html">
						<img onmouseout="this.setAttribute('src','images/homebutton.png')" onmouseover="this.setAttribute('src','images/homebuttonhover.png')" src="images/homebutton.png">
					</a></li>
					<li><a href="login.html">
						<img onmouseout="this.setAttribute('src','images/loginbutton.png')" onmouseover="this.setAttribute('src','images/loginbuttonhover.png')" src="images/loginbutton.png">
					</a></li>
					<li><a href="games.html">
						<img onmouseout="this.setAttribute('src','images/gamesbutton.png')" onmouseover="this.setAttribute('src','images/gamesbuttonhover.png')" src="images/gamesbutton.png">
					</a></li>
					<li><a href="contactus.html">
						<img onmouseout="this.setAttribute('src','images/contactusbutton.png')" onmouseover="this.setAttribute('src','images/contactusbuttonhover.png')" src="images/contactusbutton.png">
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
<div class="content" style="margin-left: 220px;margin-top: 150px;">
  <h1> Administrator Page</h1>
  <p1 style="font-size: large;"><b>Manage games list</b></p1><br>
  <p> Current list of games<p>
  <p style="text-align:right;margin-right:200px;"> Edit List of games</p>
  <script>
  </script>
  <div >
    <ul style="display:block;align:left;">
      <?php
      $sql = "SELECT gameID, gName, description FROM Games";
      $result = $conn->query($sql);
      while ($row = mysqli_fetch_assoc($result)){
        echo "<li style='display:block;width:40%;background-color:#f0f8ff;padding:14px;overflow-y:auto;border-bottom:1px solid black;'>Game ID: ". $row["gameID"]."<br> Name:" . $row['gName']."<br> description:". $row['description']."</li>";
      }
      ?>
    </ul>

  </div>
</div>

</body>
<br> <br> <hr border = "1" color = "black">
<img src = "images/payment.jpg" style = "width:20%; margin-left: 210px">
<a href="contactus.html" style = "margin-left: 35%;"> Contact Us | </a>
<a> Privacy policy | </a>
<a> Accessibility </a>
</html>
