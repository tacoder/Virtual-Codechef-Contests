
<div id = "topwrapper"><div class="topnavleft" id="logo"><a href="index.php"><img src="logo.png" style="padding:0px;"/></a></div> 
<div class="topnavleft"><a href="index.php">Home</a></div> 
<div class="topnavleft"><a href="compete.php">Compete!</a></div> 
<div class="topnavleft"><a href="about.php">About</a></div>
<?php 
session_start();
if(!isset($_SESSION['loggedIn']))
	echo '<div class="topnavright"> <a href="login.php">Login</a> </div></div>';
else{
	echo '<div class="topnavright"><a href="#">'.$_SESSION['username'].'</a> </div></div>';
	echo '<div id="logInBox">';
	echo '<a href="account.php">Account</a>';
	echo '<a href="logout.php">Log Out</a>';
	echo '</div>';
}