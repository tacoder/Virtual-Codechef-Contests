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
			<span class="formError">
		<?php
		if(isset($_GET['error']))
			echo htmlspecialchars ($_GET['error']);
		if(isset($_SESSION['loggedIn']))
			 header('Location: index.php');  
		// ---- Check if user is already logged in.
		if(isset($_POST['username']) && isset($_POST['password']) )
		{
			require_once("includes/connect.php");
			if(!mysqli_select_db($con, "users")){
				echo "Cannot open database!!".mysqli_error($con)."<br />";
				die("Tell my wife i love her.");
			}
			$u = $con->real_escape_string($_POST["username"]);
			$p = $con->real_escape_string($_POST["password"]);
			$query = mysqli_query($con,'select * from logininfo where username="'.$u.'" ;');
			$row = $query->fetch_assoc();
			if(!is_null($row) && password_verify($p,$row["password"])) {
				echo "Login successful";
				
				$_SESSION['loggedIn'] = true;
				$_SESSION['username'] = $u;
				$_SESSION['handle'] = $row['handle'];
				header('Location: index.php');  
			} else {
				/*if(mysqli_errno($con) == 1062)*/
				echo "Username or Password incorrect<br />";
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
