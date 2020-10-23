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
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<link rel="stylesheet" type="text/css" href="styles/contactusstyles.css">
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
   <div class="content" style="margin-left: 220px;margin-top: 150px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color:#fdfffa;">
  <h1 style='display:block;background-color:#282721;height:70px;text-align:center;color:#696969;'> Administrator Page</h1>
  <p1 style="font-size: large;"><b>Manage games list</b></p1><br>
  <script>
  </script>
  <div border-radius:10%;>
    <form>
      <fieldset>
      <legend> Current list of games:</legend>
    <ul style="display:block;align:left;width:100%;">
      <?php
      $sql = "SELECT gameID, gName, description FROM Games";
      $result = $conn->query($sql);
      while ($row = mysqli_fetch_assoc($result)){
        echo "<li style='display:block;width:40%;background-color:#f0f8ff;padding:14px;overflow-y:auto;border-bottom:1px solid black;'>Game ID: ". $row["gameID"]."<br> Name:" . $row['gName']."<br> description:". $row['description']."</li>";
      }
      ?>
    </ul>
  </fieldset>
  </form>
  <fieldset>
  <legend><b> Update an entry:</b></legend>
    <form action="adminUpdate.php" method="POST">
      Select Game id to change:<select name="gameID">
      <?php
      $sql = "SELECT gameID, gName, description FROM Games";
      $result = $conn->query($sql);
      while($row = mysqli_fetch_assoc($result)){
        echo "<option value='".$row["gameID"]."'>".$row["gameID"]."</option>";
      }
      ?></select>
      <br>
      Enter New Name:<br><input type="text" name="name" style='box-sizing: border-box;padding: 12px 20px;width:100%;'><br>
      Enter New Description:<br><input type="text" name="desc" style='box-sizing: border-box;padding: 12px 20px;width:100%;'><br><br>
      <input type="submit" value="Update" style="border:none;font-size:14px;margin-left:10px;padding:12px 32px;">
    </fieldset>
    </form>

    <p></p>
    <form action="adminRemove.php" method="POST">
      <fieldset>
      <legend><b>remove an entry:</b></legend>
      Select Game id to Remove:<select name="gameID">
      <?php
      $sql = "SELECT gameID, gName, description FROM Games";
      $result = $conn->query($sql);
      while($row = mysqli_fetch_assoc($result)){
        echo "<option value='".$row["gameID"]."'>".$row["gameID"]."</option>";
      }
      ?></select><br>
      <input type="submit" value="Remove" style="border:none;font-size:14px;margin-left:10px;padding:12px 32px;">
    </fieldset>
    </form>
    <p><b> add an entry:</b></p>
    <form action="adminAdd.php" method="POST">
      <fieldset>
      <legend><b>add an entry:</b></legend>
      Enter id:<br><input type="text" name="gameID" style='box-sizing: border-box;padding: 12px 20px;width:100%;'><br><br>
      Enter Name:<br><input type="text" name="name" style='box-sizing: border-box;padding: 12px 20px;width:100%;'><br>
      Enter Description:<br><input type="text" name="desc" style='box-sizing: border-box;padding: 12px 20px;width:100%;'><br><br>
      <input type="submit" value="Add" style="border:none;font-size:14px;margin-left:10px;padding:12px 32px;">
    </fieldset>
    </form>
  </div>
</div>

</body>
<br> <br> <hr border = "1" color = "black">
<img src = "images/payment.jpg" style = "width:20%; margin-left: 210px">
<a href="contactus.html" style = "margin-left: 35%;"> Contact Us | </a>
<a> Privacy policy | </a>
<a> Accessibility </a>
</html>
