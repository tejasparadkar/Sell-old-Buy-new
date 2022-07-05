<?php
$cookie_name="Website";
$cookie_value="Website by Tejas";
setcookie($cookie_name,$cookie_value,time()+3600,"/");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>
	B & S
</title>
<link rel="icon" href="C:\Users\Patil\Desktop\My PHP Project\img\lg.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="tabs.css">
    <link rel="stylesheet" href="socialmedia.css">
</head>
<body>
<style>body{
	background-image:url('logo.png');
	background-repeat:no-repeat;
	background-size:cover;
background-position:right;
}
</style>


<div class="tab">
<span style="float:right;">
	<ul>

  		<li><a href="main.html">Home</a></li>
        <li><a href="profile.html">Profile</a></li>
  		<li><a href="rating.html">Rating</a></li>
 		<li><a href="Buy.html">Buy</a></li>
		<li><a href="">Sell</a></li>
		<li><a href="signin">Login</a></li>
	
    </ul>
</span>
</div>
    <div class="icon-bar">
  		<a href="#" class="si1"><img src="si1.ico"></a> 
 		<a href="#" class="si5"><img src="si5.ico"></a> 
  		<a href="#" class="si2"><img src="si2.ico"></a> 
  		<a href="#" class="si3"><img src="si3.ico"></a>
  		<a href="#" class="si4"><img src="si4.ico"></a> 
	</div>
<br>
<br>
<br>
<div class="container">  
<form class="form-inline" action="/action_page.php"> 
	<input type="text" placeholder="Search.." name="search2">  
<button type="submit" id="button1"><i class="fa fa-search"></i></button>
<button id="button2"><i class="fa fa-camera"></i></button> 
</form> 	
</div> 

<p align="left">



    <hr>
    <footer>
    <?php
echo "There are cookies in the website<br><br><br>";
if(!isset($_COOKIE[$cookie_name]))
{
echo "Cookie is not set<br>";
}
else
{
echo "The cookies are:<br>";
echo "<br>Cookie name : $cookie_name";
echo "<br>Cookie value : $_COOKIE[$cookie_name]<br><br>";
}
echo "Today is " . date("d-m-Y") . "<br>";
echo "The time is " . date("h:i:sa")."<br>";
$_SESSION["web"] = "Website created by";
$_SESSION["name"] = "Tejas Paradkar";
echo "<br><br>Session variables are set.<br><br>The session variables are:<br>";
echo "Favorite color is " . $_SESSION["web"] . ".<br>";
echo "Your username is " . $_SESSION["name"] . ".";

        ?></footer>
    </body>
</html>
