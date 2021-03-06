<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Virtual codechef contests</title>
	<link rel="stylesheet" type="text/css" href="index.css" />
	<link rel="stylesheet" type="text/css" href="front.css" />
	<link rel="icon" href="favicon.ico" type="../image/x-icon"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="includes/topnav.js"></script>
	<script src="includes/countdown.js"></script>
</head>

<body>
	<div id="topnav">
		<?php include_once("includes/topnav.php");?>
	</div>

	<div id="front">



	<?php 
	if(isset($_SESSION['username'])){
		require_once("includes/connect.php");
		if(!mysqli_select_db($con, "users")){
				echo mysqli_errno($con);
				// --- If error occurs here, Add functionality to log the error rather than displaying it to the user
				//echo "Cannot open database!!".mysqli_error($con)."<br />";
				die();
			}
		$curtime = time();
		$qr = 'select * from '.$con->real_escape_string($_SESSION['username']).' where end > '.$curtime.';';
		$query = mysqli_query($con,$qr);
		$count = 0;
		if(!empty($query))
			while ($row = mysqli_fetch_assoc($query)) {
		        $tarr[] = $row['end'];
		        $tcon[] = $row['contestname'];
		        $tcod[] = $row['contestcode'];
		        $count++;
		    }
		echo '<table class="contestTable">';
		echo '<tr class="topRow"> 	<td>Name of contest</td> 	<td > Time left</td> </tr>';
		for ($i=0;$i<$count;$i++) {
			echo '<tr class="'.($i%2==0?"rowLight":"rowDark").'">';
			echo '<td><a href="contest/'.$tcod[$i].'/">'.$tcon[$i].'</a></td>';
			echo '<td id="tm'.$i.'"></td>';
			echo '</tr>';
		}
		echo '</table>';
		echo '<script>';
		for ($i=0;$i<$count;$i++){
			echo 'set('.$tarr[$i].',"tm'.$i.'");';
		}
		echo '</script>';
		
	}
	else{
		//echo "Hello and welcome to this website!!";
		echo 
		'<div id = "main-content-wrapper-outer">
			<div id = "main-content-wrapper">

				<div id = "left">
					<img src = "biglogo.jpg" 
					/><div if="quote-wrapper"
					><span id = "quote">Eat. Pray. Code.</span
					></div>
				</div>

				<div id = "right">
					<div id = "form-wrapper">
						<form name="login-form" action="login.php" method="post">
							<fieldset>
								<legend>Log In</legend>
								<input type="text" name="username" id="username" placeholder = "Username" autofocus><br />
								<input type="password" name="password" placeholder ="Password"><br />
								<input type="submit" value="Log In">
							</fieldset>
						</form>
						<span>Or</span>
						<form id="regform" name="register-form" action="register.php" onsubmit="return validateForm()" method="POST">
							<fieldset>
								<legend>Register</legend>
								<input type="text" name="username" id="username" placeholder="Username "><br />
								<input type="password" name="password" placeholder="Password "><br />
								<input type="password" name="confirm_password" placeholder="Confirm Password"><br />
								<input type="text" name="handle" placeholder="Codechef Handle"><br />
								<input type="submit" value="Register">
							</fieldset>
						</form>
					</div>
				</div>
				
			</div>
		</div>';
	}
	?>
	</div>
	</body>

</html>
