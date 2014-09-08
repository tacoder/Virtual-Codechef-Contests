<?php 
session_start();
function returnError($errcode){
	echo $errcode;
}
$st = time();
echo "script started at:";
echo $st;
echo "<br />";

if(isset($_GET['ccode'],$_SESSION['username'])){
	$ccode = $_GET['ccode'];
	$timeout = 3;
	require('includes/simple_html_dom.php');
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
				$checkTime = $curtime - $timeout;
				$qr = 'select * from updatelogs where time > '.$checkTime.' and username = "'.$_SESSION['username'].'";';
				echo $qr."<br />";
				$query = mysqli_query($con,$qr);
				$rowcount = mysqli_num_rows($query);
				if($rowcount == 0) {
					echo "perfect query ";
					//--- insert query.
				} else {
					/*if(mysqli_errno($con) == 1062)*/
					echo "similar request happened less than ".$timeout." secs ago<br />";
				}
				$qr = 'insert into updatelogs value ("'.$_SERVER['REMOTE_ADDR'] .'","'.$curtime.'","'.$_SESSION['username'].'")';
				echo $qr."<br />";
				$query = mysqli_query($con,$qr);
				echo mysqli_error($con);
				if(!mysqli_select_db($con, "contests")){
					echo "Cannot open database!!".mysqli_error($con);
				}
				$query = mysqli_query($con,"select code,name from ".$ccode." order by code;");
				$result = $query->fetch_all( MYSQLI_ASSOC);
				foreach( $result as $row ){
				   $contPage=file_get_html('http://www.codechef.com/status/'.$row['code'].','.$_SESSION['handle'].'');
				} 
					
				
} else {
	if(!isset($_SESSION['username']))
		returnError("User not logged in.");
	else
		returnError("No contest code specified.");
}
$en = time();
echo "script ended at:";
echo $en;
echo "<br />";
echo "total time:";
echo $en-$st;
?>