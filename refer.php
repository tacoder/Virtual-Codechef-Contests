
<?php
session_start();
if(isset($_GET['code']) && isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
	require_once("includes/connect.php");
	if(!mysqli_select_db($con, "contests")){
		echo json_encode(array('errcode' => mysqli_errno($con)));
		die();
	}

	$query = mysqli_query($con,'select count(*) from '.$con->real_escape_string($_GET['code']));
	$arr = mysqli_fetch_assoc($query);
	$count = $arr['count(*)'];
	
	$query = mysqli_query($con,'select * from list where code = "'.$con->real_escape_string($_GET['code']).'"');
	$arr = mysqli_fetch_assoc($query);
	$cname = $arr['name'];
	$duration = $arr['end'] - $arr['start'];

	echo $count.'<br />';
	echo $duration.'<br />';
	if(!mysqli_select_db($con, "users")){
			echo json_encode(array('errcode' => mysqli_errno($con)));
			// --- If error occurs here, Add functionality to log the error rather than displaying it to the user
			//echo "Cannot open database!!".mysqli_error($con)."<br />";
			die();
		}
	$curtime = time();
	$query = mysqli_query($con,'select * from '.$_SESSION['username'].' where contestcode = "'.$_GET['code'].'" and end > '.$curtime.';');
	if(mysqli_errno($con) == 1146){
		//create table for user.
		$query = mysqli_query($con,'create table '.$_SESSION['username'].'( contestname varchar(150) not null, contestcode varchar(20) not null, nproblems int not null, start bigint(20) unsigned not null, end bigint(20) unsigned not null unique key, rank int unsigned, totaltime bigint(15) unsigned );');
	}
	$query = mysqli_query($con,'select * from '.$_SESSION['username'].' where contestcode = "'.$_GET['code'].'" and end > "'.$curtime.'";');
	echo mysqli_error($con);
	if(mysqli_num_rows($query) == 0){
		echo "query empty";
		
		$query = mysqli_query($con,"SELECT COUNT(*) totalColumns FROM   INFORMATION_SCHEMA.COLUMNS WHERE  table_name = '".$_SESSION['username']."' AND  TABLE_SCHEMA = 'users' ;");
		$arr = mysqli_fetch_assoc($query);
		$ncols = $arr['totalColumns'];
		echo $ncols;
		$ncols -= 7;
		if((($ncols)/2) < $count)
			for ($x=(intval($ncols/2))+1; $x<=$count; $x++) {
	  		  echo "The number is: $x <br>";
	  		  mysqli_query($con,"ALTER TABLE ".$_SESSION['username']." ADD s".$x." int;");
	  		  echo mysqli_error($con);
	  		  mysqli_query($con,"ALTER TABLE ".$_SESSION['username']." ADD p".$x." int;");
	  		  echo mysqli_error($con);
	  		  
			} 
			$qr = "insert into ".$_SESSION['username']." (contestname,contestcode,nproblems,start,end) values ('".$cname."','".$_GET['code']."',".$count.",".$curtime.",".($curtime+$duration).");";
			echo $qr."<br />";
		mysqli_query($con,$qr);
		echo mysqli_error($con);
	}
	$_SESSION[$_GET['code']] = true;
	header("location:contest/".$_GET['code']);
}
else{
	header('Location: login.php?error=You+must+login+before+starting+a+contest');  
}
?>
<!--
SELECT COUNT(*) totalColumns FROM   INFORMATION_SCHEMA.COLUMNS WHERE  table_name = 'rtgwe' AND  TABLE_SCHEMA = 'users' 


Home
Compete!
About
rtgwe --> 