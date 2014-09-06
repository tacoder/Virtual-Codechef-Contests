<?php 
session_start();
function returnError($errcode){
	echo $errcode;
}
if(isset($_GET['ccode'],$_SESSION['username'])){
	$ccode = $_GET['ccode'];
	require("includes/connect.php");
				if(!mysqli_select_db($con, "users")){
						echo mysqli_errno($con);
						// --- If error occurs here, Add functionality to log the error rather than displaying it to the user
						//echo "Cannot open database!!".mysqli_error($con)."<br />";
						die();
					}
					$curtime = time();
				$qr = 'select * from '.$con->real_escape_string($_SESSION['username']).' where end > '.$curtime.';';
				$query = mysqli_query($con,$qr);
				$isSolving = false;
				if(!empty($query))
					while ($row = mysqli_fetch_assoc($query)) {
				        if($row['contestcode'] == $ccode){
				        	$isSolving = true;
				        	break;
				        }
				    }
				if(!$isSolving)
					returnError("User is not solving this problem right now lol.");
				if(!mysqli_select_db($con, "logs")){
						echo mysqli_errno($con);
						// --- If error occurs here, Add functionality to log the error rather than displaying it to the user
						//echo "Cannot open database!!".mysqli_error($con)."<br />";
						die();
					}
				$checkTime = $curtime - 30;
				$qr = 'select * from updatelogs where time > '.$checkTime.' and username = "'.$_SESSION['username'].'";';
				echo $qr."<br />";
				$query = mysqli_query($con,$qr);
				$rowcount = mysqli_num_rows($query);
				if($rowcount == 0) {
					echo "perfect query ";
					//--- insert query.
				} else {
					/*if(mysqli_errno($con) == 1062)*/
					echo "similar request happened less than 30 secs ago<br />";
				}
				$qr = 'insert into updatelogs value ("'.$_SERVER['REMOTE_ADDR'] .'","'.$curtime.'","'.$_SESSION['username'].'")';
				echo $qr."<br />";
				$query = mysqli_query($con,$qr);
				echo mysqli_error($con);
					
				
} else {
	if(!isset($_SESSION['username']))
		returnError("User not logged in.");
	else
		returnError("No contest code specified.");
}

?>