<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Virtual codechef contests</title>
	<link rel="stylesheet" type="text/css" href="index.css" />
	<link rel="stylesheet" type="text/css" href="login.css" />
	<link rel="icon" href="favicon.ico" type="../image/x-icon"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="includes/register.js"></script>
</head>

<body>
	<div id="topnav">
		<?php include_once("includes/topnav.php");?>
	</div>


	<div id="sidenav">
		<?php include_once("includes/sidenav.php");?>
	</div>
	
	<div  id="maincontent">
<?php 
session_start(); 
if(!isset($_SESSION['count'])) 
	$_SESSION['count'] = 1;
else 
	$_SESSION['count']++; 
echo $_SESSION['count'];
?>		<div id="form-wrapper">
		<form name="register-form" action="register.php" onsubmit="return validateForm()" method="POST">
			Username<span id="usernameconfirm"></span><br /><input type="text" name="username" id="username"><br />
			Password<span id="passwordconfirm"></span><br /><input type="password" name="password"><br />
			Confirm Password<br /><input type="password" name="confirm_password"><br />
			<input type="submit" value="Register">
		</form>
		<div>
	</div>
</body>

</html>
