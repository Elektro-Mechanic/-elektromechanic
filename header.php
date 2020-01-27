<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://elektromechanic.com/style.css" />
	<header>
		<nav class="nav-header-main">
		  <a href="http://elektromechanic.com/index.html">
		  <img src="/logo.jpg" alt="logo" height=42px width=42px class="header-logo">
		  </a>
		  <button class="btn" onclick="window.location.href='index.html'">Home</button>
		  <button class="btn" onclick="window.location.href='Elektro-MechanicProj.html'">Projects</button>
		  <div class="dropdown">
		    <button onclick="myFunction()" class="dropbtn">Products</button>
		    <div id="myDropdown" class="dropdown-content">
		      <a href="Elektro-MechanicProd.html">Elektronic/Mechanic</a>
		      <a href="Elektro-MechanicMedProd.html">Media</a>
		    </div>
		  </div>

		  <script>
		  function myFunction() {
		    document.getElementById("myDropdown").classList.toggle("show");
		  }
		  window.onclick = function(event) {
		    if (!event.target.matches('.dropbtn')) {
		      var dropdowns = document.getElementsByClassName("dropdown-content");
		      var i;
		      for (i = 0; i < dropdowns.length; i++) {
		        var openDropdown = dropdowns[i];
		        if (openDropdown.classList.contains('show')) {
		          openDropdown.classList.remove('show');
		        }
		      }
		    }
		  }
		  </script>
		  <button class="btn" onclick="window.location.href='Elektro-MechanicAbou.html'">About</button>
		  <button class="btn" onclick="window.location.href='Elektro-MechanicDon.html'">Donate</button>
		  <button class="btn" onclick="window.location.href='Elektro-MechanicLin.html'">Links</button>
		  <button class="btn" onclick="window.location.href='index2.php'">Login</button>
		  <div class="header-login">
	     <form action="/root/includes/logout.inc.php" method="post" class="header-login">
			  <button type="submit" name="logout-submit" class="btn2">Logout</button></form>
			  <button name="signup-submit" class="btn2" onclick="window.location.href='http://elektromechanic.com/signup.php'">Signup</button>
         <form action="/root/includes/login.inc.php" method="post"> 
			  <button type="submit" name="login-submit" class="btn2">Login</button>
			  <input type="password" name="pwd" placeholder="Password..." class="rounded">
			  <input type="text" name="mailuid" placeholder="E-mail/Username" class="rounded">
		  </form>  
		  </div>
	    </nav>
	</header>
  </head>
 <body>