<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Virtual codechef contests</title>
	<link rel="stylesheet" type="text/css" href="index.css" />
	<link rel="stylesheet" type="text/css" href="login.css" />
	<link rel="icon" href="favicon.ico" type="../image/x-icon"/>
</head>

<body>
	<div id="topnav">
		<?php include_once("includes/topnav.php");?>
	</div>


	<div id="sidenav">
		<?php include_once("includes/sidenav.php");?>
	</div>
	
	<div  id="maincontent">
		<div id="form-wrapper">
		<form name="login-form" action="login.php">
			Username<br /><input type="text" name="username" id="username"><br />
			Password<br /><input type="password" name="password"><br />
			<a href="#" class="FormButton">Register</a><input type="submit" value="Log In">
		</form>
		Not a user? <a href="register.php">Sign Up</a>
		<div>
	</div>
</body>

</html>
