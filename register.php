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
	<div id="topnav"> <?php include_once("includes/topnav.php");?> </div>
	<div id="sidenav"> <?php include_once("includes/sidenav.php");?> </div>
	
	<div  id="maincontent">
	<?php
		if(isset($_SESSION['loggedIn']))
			 header('Location: index.php');  
		
	if(!isset($_SESSION['count'])) 
		$_SESSION['count'] = 1;
	else 
		$_SESSION['count']++; 
	echo $_SESSION['count'];
	
	require("includes/connect.php");
		if(!mysqli_select_db($con, "users")){
			echo json_encode(array('errcode' => 1));
			// --- If error occurs here, Add functionality to log the error rather than displaying it to the user
			//echo "Cannot open database!!".mysqli_error($con)."<br />";
			die();
		}
		
	function userExists($usern){
		global $con;
		if(($usern=="")) return true;
		$query = mysqli_query($con,'select * from logininfo where username="'.$con->real_escape_string($usern).'";');
		return (!is_null(($query->fetch_assoc())));
	}

	function isValidUser($usern){
		if($_POST['username']==""){
			return 1;
		} elseif(!preg_match('/^([a-zA-Z0-9]*)$/',$_POST['username'])){
			return 3;
		} elseif(userExists($_POST['username'])){
			return 2;
		} elseif(strlen($usern) > 20){
			return 4;
		} else {
			return 0;
		}
	}

	$dataEntered = isset($_POST['username'],$_POST['password'],$_POST['confirm_password'],$_POST['handle']);

	if($dataEntered){

		$right = '<img  src="right.png" style="padding-left:3px;">';
		$wrong = '<img  src="wrong.png" style="padding-left:3px;">';
			
		$validUsername = isValidUser($_POST['username']);
		$passwordsempty = (($_POST['password'] == "") && ($_POST['confirm_password'] == ""));
		$passwordsMatch =( $_POST['password'] == $_POST['confirm_password']);
		$passwordNotLongEnough = (strlen($_POST['password']) < 8) ;
		$handleEmpty = ($_POST['handle'] == "");
		$handleMatch = preg_match('/^[a-z]{1}[a-z0-9_]{3,13}$/',$_POST['handle']);

		$u = $con->real_escape_string($_POST['username']);
		$p = password_hash($con->real_escape_string($_POST['password']),PASSWORD_BCRYPT);
		$h = $con->real_escape_string($_POST['handle']);

		if(($validUsername == 0) && $passwordsMatch && !$passwordsempty && !$handleEmpty && $handleMatch && !$passwordNotLongEnough){
			echo "registration data OK.";//----- insert into databse.
			mysqli_query($con,"insert into logininfo values ('$u','$p','$h');");
			echo "Registration successful!!";
			//--- redirect to login page.
		}
			
		else{
			echo "<script>$(document).ready(function(){ setdata('".$_POST['username']."','".$_POST['handle']."'); }); </script>";
		}
			
			
	
	}

	?>
	<div id="form-wrapper">
		<form name="register-form" action="register.php" onsubmit="return validateForm()" method="POST">
			Username<span id="usernameconfirm">
			<?php 
				if($dataEntered){
	 			$usererror = array( "No error in username",
	 								"Username left empty",
	 								"Username already registered",
	 								"Username must contain alphanumeric charachters (a-z,A-Z,0-9).",
	 								"Username must be less than or equal to 20 charachters.");
				if(!($validUsername == 0))
					echo $wrong.'<span class="formError">'.$usererror[$validUsername].'</span>';
			}
			?>
			</span><br /><input type="text" name="username" id="username"><br />
			Password<span id="passwordconfirm">
			<?php 
			if($dataEntered){
		 		if($passwordsempty)
					echo $wrong.'<span class="formError">'."Password empty".'</span>';
				if(!$passwordsMatch)
					echo $wrong.'<span class="formError">'."Passwords don't match.".'</span>';
				if($passwordsMatch && $passwordNotLongEnough)
					echo $wrong.'<span class="formError">'."Passwords must be at least 8 characters".'</span>';
			}
			?>
			</span><br /><input type="password" name="password"><br />
			Confirm Password<br /><input type="password" name="confirm_password"><br />
			Codechef Handle<span id="handleconfirm">
			<?php 
			if($dataEntered){
		 		if($handleEmpty)
					echo $wrong.'<span class="formError">'."Handle not entered.".'</span>';
				if(!$handleMatch)
					echo $wrong.'<span class="formError">'."Handle should match this format /^[a-z]{1}[a-z0-9_]{3,13}$/".'</span>';
			}
			?>
			</span><br /><input type="text" name="handle"><br />
			<input type="submit" value="Register">
		</form>
		</div>
	</div>
</body>

</html>
