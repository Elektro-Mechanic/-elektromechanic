<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Combining Electronics, mechanics, and coding to build awesome stuff. 'Build. Code. Invent. Create.' We know it's missing have fun but, come on, I think we all know that">
<meta name="keywords" content="elektromechanic,elektro-mechanic,elektromechanic.com,elektro-mechanic.com">
<meta name="author" content="Quinn Stephens">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Elektro-Mechanic</title>
<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
    background-image: url("http://elektromechanic.com/Background.jpg");
}

.header {
  padding: 30px;
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
  color: white;
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
}
.fb:hover {
    background-color: RoyalBlue;
}
.allcontent {
    width: 50%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    z-index: 1;
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
    position: absolute;
    top: 50%;
    margin-left: auto;
    margin-right: auto;
    background-color: #333;
    padding: 10px;
    position: -webkit-sticky;
    position: sticky;
    width: 380px;
    z-index: 2;
}
.error {
    position: absolute;
    top: 50%;
    margin-left: auto;
    margin-right: auto;
    background-color: #333;
    padding: 10px;
    position: -webkit-sticky;
    position: sticky;
    width: 50%;
}
</style>
</head>
<body>

<!--<div class="login">
  <div style="margin-left: auto; margin-right: auto;">
  <form action="authenticate2.php" method="post" style="display: inline;">
   <input type="text" name="username" placeholder="Username" class="srch">
   <input type="password" name="pass" placeholder="Password" class="srch">
   <input type="hidden" name="signin" value="yes">
   <input type="submit" value="Log In" class="fb">
   </form>
   </div>
   </div>-->

<div class="allcontent">
<div class="header">
  <h2>Elektro-Mechanic</h2>
  <p>Build. Code. Invent. Create.</p>
  <img src="http://elektromechanic.com/favicon.ico"><br>
</div>
<div id="navbar">
  <a class="active" href="elektromechanic.com/index.php">Home</a>
  <a href="elektromechanic.com/projects/projects.php">Projects</a>
  <a href="javascript:void(0)" id="prod">Products</a>
  <a href="javascript:void(0)">About</a>
  <form action="/action_page.php" style="float: right; display: inline;">
  <input type="text" placeholder="Search..." name="search" class="srch">
  <button type="submit" class="srch">Search</button>
  </form>
  <p style="color: white; display: inline; font-size: 18px; margin-left: 5px;">Hello, Guest</p>
   <p style="font-size: 14px; color: white;">Notice: Search and buttons are not yet operational, we're still working on them!</p>
</div>

<div class="content">
  <h2>Projects</h2>
  <table>
    <tr>
      <th>Name</th>
    	<th>Description</th>
    </tr>
    <tr>
      <td><a href="EKS-100P.html">S100 computer</a></td>
    	<td>Making an <a href="https://en.wikipedia.org/wiki/S-100_bus">S-100</a> with an <a href="https://standards.ieee.org/standard/696-1983.html">IEEE-696 bus</a> backplane 
  		Status: active</td>
    </tr>
    <tr>
      <td>Robot</td>
    <td>Making a robot controlled using an Xbox controller Status: Planning and drawing</td>
    <tr>
      <td>S-100 software</td>
    <td>Making software for/programming the S-100 computer Status: S-100 computer first!</td>
    </tr>
    </tr>
    <table>
<p>Copyright (&copy;) 2020 Quinn Stephens</p>
</div>
</div>
<?php
    $hn = 'localhost';
    $un = 'EK1580';
    $pw = '1580qew501825';
    $db = 'EKloginsystem';
    $conn = new mysqli($hn, $un, $pw, $db);
    
    if ($conn->connect_error) die("<p class='error'>Fatal Error</p>");
    
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
                echo htmlspecialchars("<p class='error'>Hi $row[0], you are now logged in!</p>");
                
                //die ("<p class='error'><button onclick=''>Continue</button></p>");
            }
            else die("<p class='error'>Invalid username/password combination</p>");
        }
        else die("<p class='error'>Invalid username/password combination</p>");
    }
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
    echo "<form action='authenticate2.php' method='post'><pre>
          <input type='hidden' name='show' value='yes'>
          <input type='submit' value='Sign In'>
          </pre></form>";
    if (isset($_POST['show']))
    {
        if (isset($_SESSION['username']) && isset($_SESSION['password']))
        {
            $user = htmlspecialchars($_SESSION['username']);
    
            echo "<p class='error'>Welcome back $user</p>";
        }
        else echo "<p class='error'>You are not logged in yet. Please log in.</p>script";
    }
?>
</body>
</html>