<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Combining Electronics, mechanics, and coding to build awesome stuff. 'Build. Code. Invent. Create.'">
<meta name="keywords" content="elektromechanic,elektro-mechanic,elektromechanic.com,elektro-mechanic.com">
<meta name="author" content="Quinn Stephens">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Elektro-Mechanic</title>
<script src="https://kit.fontawesome.com/1a7ba69108.js" crossorigin="anonymous"></script>
<style>
body {
  margin: 0;
  font-size: 12px;
  font-family: Arial, Helvetica, sans-serif;
    background-image: url("http://elektromechanic.com/Background.jpg");
}

.header {
  padding: 10px;
  text-align: center;
  display: block;
  margin-left: auto;
  margin-right: auto;
  background-color: #228dff;
}

#navbar {
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 100%;
}

#navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  transition-property: background-color;
  transition-duration: 0.5s;
  transition-timing-function: linear;
  /*transition-delay: 0.25s;*/
}

#navbar a:hover {
  background-color: #228dff;
}

#navbar a.active {
  background-color: #228dff;
  color: white;
}
#navbar button:hover {
  background-color: RoyalBlue;
}

#navbar button {
  background-color: #228dff;
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 5px;
  margin: 10px;
  border-radius: 5px;
  text-decoration: none;
  font-size: 17px;
  transition-property: background-color;
  transition-duration: 0.5s;
  transition-timing-function: linear;
}

.content {
  padding: 16px;
  color: white;
  font-size: 20px;
  padding-top: 30px;
}

#prod:hover .dc {display: block;}
.srch {
padding: 7px;
margin: 10px;
border-radius: 5px;
background-color: #333;
color: white;
}
.fb {
    background-color: #228dff;
    color: white;
    border-radius: 5px;
    padding: 7px;
    margin: 10px;
	width: 124px;
}
.fb:hover {
    background-color: RoyalBlue;
}
.allcontent {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    z-index: -1;
}
.content a {
    text-decoration: none;
    color: #228dff;
}
.content table {
    height: 100px;
    border: 5px solid #228dff;
    padding: 2px;
    margin: 10px;
}
th {
    border: 5px solid #228dff;
    padding: 1px;
    margin: 10px;
}
td {
    border: 5px solid #228dff;
    padding: 1px;
    margin: 10px;
}
.login {
	position: fixed;
    top: 50%;
    margin-left: auto;
    margin-right: auto;
    background-color: #333;
    padding: 10px;
    position: -webkit-sticky;
    position: sticky;
    width: 147px;
    z-index: 1;
	border-radius: 5px;
	display: none;
}
.error {
    display: none;
    position: fixed;
    z-index: 1;
    top: 50%;
	color: white;
    margin-left: auto;
    margin-right: auto;
    background-color: #333;
    padding: 10px;
    position: -webkit-sticky;
    position: sticky;
    width: 50%;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
.modal button {
  background-color: #228dff;
  color: white;
  padding: 10px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  transition-property: background-color;
  transition-duration: 0.5s;
  transition-timing-function: linear;
}

button:hover {
	background-color: RoyalBlue;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: 25%;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
  
}

.container {
  padding: 16px;
}

.container input {
	border-radius: 5px;
}

.container button {
	border-radius: 5px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  overflow: auto; /* Enable scroll if needed */
  padding-top: 60px;
  margin-left: 25%;
  margin-right: 25%;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
  transition-property: color;
  transition-duration: 0.5s;
  transition-timing-function: linear;
}

.close:hover,
.close:focus {
  color: #228dff;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw, 
  span.psw a {
     display: block;
     float: none;
	 text-decoration: none;
	 font-size: 12px;
  }
}
</style>
</head>
<body>
<div class="allcontent">
<div class="header">
  <h2 style="font-size: 28px;">Elektro-Mechanic | Home & News</h2>
  <p style="font-size: 28px;">Build. Code. Invent. Create.</p>
  <span style="color: #fc6b32;"><i class="fab fa-cpanel fa-7x"></i></span>
  <img src="favicon.ico"><br>
</div>
<div id="navbar">
  <a class="active" href="http://elektromechanic.com">Home</a>
  <a href="http://projects.elektromechanic.com">Projects</a>
  <a href="javascript:void(0)" id="prod">Products</a>
  <a href="javascript:void(0)">About</a>
  <button onclick="document.getElementById('id01').style.display='block'">Sign in</button>
  <form action="/action_page.php" style="float: right; display: inline;">
  <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search..." title="Type in the title of something on this website you want to find" name="search" class="srch">
  <button type="submit" class="srch">Search</button>
  </form>
  <p style="color: white; display: inline; font-size: 18px; margin-left: 5px;">Hello, Guest</p>
   <p style="font-size: 14px; color: white;">Notice: Search and buttons are not yet operational, we're still working on them!</p>
</div>

<div class="content">
  <h2>News</h2>
    <table>
      <tr><th>Date</th>
          <th>News</th></tr>
	  <tr><td>3/10/2020</td>
	      <td>We made a working login form that floats over all other items and can be opened with the 'sign in' button and closed with the 'x' in the form's upper right corner</td></tr>
      <tr><td>2/26/2020</td>
          <td>We haven't been able to update the news lately, and as you can see we've been busy. Elektro-Mechanic now has a new look! We hope you like it!</td></tr>
      <tr><td>2/24/2020</td>
          <td>Updated the style of the page.</td></tr>
      <tr><td>2/5/2020</td>
          <td>Finally! We got the login system working! We will be working on the style and some other functions, and hope to finish by Sunday 2/9/20.</td></tr>
      <tr><td>1/28/2020</td>
          <td>Working on a new navigation system and removed the devlog, more info on our patreon page!</td></tr>
      <tr><td>1/21/2020</td>
          <td>We will now additionally post our news on our patreon page <a href="http://patreon.com/elektromechanic">here</a></td></tr>
      <tr><td>1/20/2020</td>
          <td>Working on a password recovery system and a dropdown menu for the products button at the top of the page.</td></tr>
      <tr><td>1/16/2020</td>
          <td>We have have been working all week on the login and signup! I haven't had enough time to write in here lately.</td></tr>
      <tr><td>1/9/2020</td>
          <td>We added some links to the Links page.</td></tr>
      <tr><td>1/8/2020</td>
          <td>We added some content to the about page and the devlog.</td></tr>
      <tr><td>1/7/2020</td>
          <td>We changed the logo to a homemede one and fixed a bug where images were cached and did not change as we channged the site!</td></tr>
      <tr><td>1/6/2020</td>
          <td>We added some content to the S-100 computer page and fixed bugs where images and backgrouds did not appear.</td></tr>
      <tr><td>1/5/2020</td>
          <td>Elektro-Mechanic is now online and we are working on content for more pages!</tr></table>
    <p>Copyright (&copy;) 2020 Quinn Stephens</p>
</div>
</div>
<div id="id01" class="modal"> 
  
     <div class="modal-content animate">
       <div class="imgcontainer">
         <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
         <img src="https://recap-project.eu/wp-content/uploads/2017/02/default-user.jpg" alt="Avatar" class="avatar">
       </div>

       <div class="container" style="text-align: center;">
		   <form action="index.php" method="post">
         <input type="text" placeholder="Enter Username" name="uname" required>

         <input type="password" placeholder="Enter Password" name="psw" required><br>
        
         <button type="submit" title="Log in to Elektro-Mechanic">Login</button><br>
		   <div title="Remember me by IP adress (devices with a dynamic IP might not always remember you)">
		   <input type="checkbox" checked="checked" name="remember">
		   <label for="remember" style="font-size: 12px;">Rember me</label>
	   </div>
	 </form>
       </div>

       <div class="container" style="background-color:#f1f1f1">
         <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
         <span class="psw">Forgot <a href="#">password?</a></span>
       </div>
     </div>
   </div>

   <script>
   // Get the modal
   var modal = document.getElementById('id01');

   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
       if (event.target == modal) {
           modal.style.display = "none";
       }
   }
   </script>

<?php
    $hn = 'localhost';
    $un = 'EK1580';
    $pw = '1580qew501825';
    $db = 'EKloginsystem';
    $conn = new mysqli($hn, $un, $pw, $db);
    
    if ($conn->connect_error) die('<p class="error">Fatal Error</p>');
    
    if (isset($_POST['signin']))
    {
    $pass = mysql_entities_fix_string($conn, $_POST['pass']);
    $user = mysql_entities_fix_string($conn, $_POST['username']);
    $query = "SELECT * FROM users WHERE username='$user'";
    $result = $conn->query($query);
    
    if (!$result) die("User not found");
    elseif ($result->num_rows)
        {
            $row = $result->fetch_array(MYSQLI_NUM);
            
            $result->close();
            
            if ($pass === $row[1])
            {
                session_start();
                $_SESSION['username'] = $row[0];
                echo htmlspecialchars('<p class="error">Hi $row[0], you are now logged in!</p>');
                
                //die ("<p class='error'><button onclick=''>Continue</button></p>");
            } else {
			echo <<<JKL
			<p class="error">Invalid username/password combination</p>
			JKL;
			die();
		    }

	echo <<<XYZ
		<p class="error">yay</p>
	XYZ;
    $conn->close();
    
    function mysql_entities_fix_string($conn, $string)
    {
        return htmlentities(mysql_fix_string($conn, $string));
    }
    
    function mysql_fix_string($conn,$string)
    {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return $conn->real_escape_string($string);
    }
    if (isset($_POST['show']))
    {
        if (isset($_SESSION['username']) && isset($_SESSION['password']))
        {
            $user = htmlspecialchars($_SESSION['username']);
    
            echo '<p class="error">Welcome back $user</p>';
        }
        else echo '<p class="error">You are not logged in yet. Please log in.</p>';
    
      }
   }
}
?>
</body>
</html>