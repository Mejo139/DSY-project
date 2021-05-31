<?php 

	include("config.php");
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// meno a heslo odoslane z formularu 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // ak sa zhoduje $myusername a $mypassword, riadok tabulky musi byt jeden
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Zadal si nesprávne meno alebo heslo!";
      }
   }
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	 <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<header>
        <div class="nav-menu">
            
            <a class="logo" href="index.php">
                <img class="desktop" src="img/logo.png" alt="">
                <img class="phone" src="img/logo-phone.png" alt="">
            </a>

            <ul id="navigation-menu" class="nav hidden">
                <li><a href="index.php">Home</a></li>
                <li><a href="models.php">Models</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>

            <div id="hamburger-menu">
                <i id="icon-menu" class="fa fa-bars fa-3x"></i>
                <i id="icon-close" class="fa fa-times fa-3x hidden"></i>
            </div>

        </div>

    </header>

	<div class="LOGIN">
		<form action="link.php" method="POST" class="login">
			<div class="container">
			<label class="login"><strong>Username</strong></label>
			<input type="text" name="uname" placeholder="User Name" class="login"><br>
			<label class="login"><strong>Password</strong></label>
			<input type="password" name="password" placeholder="Enter Password" class="login" required=""><br>
			</div>
			

			<button type="submit">LOGIN</button>
		</form>
	</div>


</body>
</html>