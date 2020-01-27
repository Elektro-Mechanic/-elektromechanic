<?php
  require "header.php";
?>
	    
	<link rel="stylesheet" href="style.css" />
	<main>
	   <div class="wrapper-main">
	  	 <section class="section-default">
	   	   <h1>Signup</h1>
	       <form action="root/includes/signup.inc.php" method="post">
		     <input type="text" name="uid" placeholder="Username" class="rounded">
		     <input type="text" name="mail" placeholder="E-mail" class="rounded"><br>
		     <input type="password" name="pwd" placeholder="Password" class="rounded">
		     <input type="password" name="pwd-repeat" placeholder="Repeat password" class="rounded"><br>
		     <button type="submit" name="signup-submit" class="btn">Signup</button> 
	        <form>
	      </section>
        </div>
	  </main>

<?php
  require "footer.php";
?>