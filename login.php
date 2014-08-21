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
			<span style="color:red">
		<?php 
		if(isset($_POST['username']) && isset($_POST['password']) )
		{
			require("includes/connect.php");
			if(!mysqli_select_db($con, "users")){
				echo "Cannot open database!!".mysqli_error($con)."<br />";
				die("Tell my wife i love her.");
			}
			$u = $_POST["username"];
			$p = $_POST["password"];
			$query = mysqli_query($con,'select * from logininfo where username="'.$u.'" and password="'.$p.'";');
			if($query->num_rows == 0)
			{

				/*if(mysqli_errno($con) == 1062)*/
				echo "Username or Password incorrect";
			} else {
				echo "Login successful";
				header('Location: index.php');  
			}
		}
		?></span>
		<form name="login-form" action="login.php" method="post">
			Username<br /><input type="text" name="username" id="username"><br />
			Password<br /><input type="password" name="password"><br />
			<input type="submit" value="Log In">
		</form>
		Not a user? <a href="register.php">Sign Up</a>
		<div>
	</div>
</body>

</html>
