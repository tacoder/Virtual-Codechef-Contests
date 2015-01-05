<?php
header('Content-Type: application/json');
session_start();
function userExists($usern){
	if(($usern=="")) return true;
	require_once("connect.php");
	if(!mysqli_select_db($con, "users")){
		echo json_encode(array('errcode' => 1));
		// --- If error occurs here, Add functionality to log the error rather than displaying it to the user
		//echo "Cannot open database!!".mysqli_error($con)."<br />";
		die();
	}
	$query = mysqli_query($con,'select * from logininfo where username="'.$con->real_escape_string($usern).'";');
	return (!is_null(($query->fetch_assoc())));
}/*
if(!isset($_SESSION['count']))
	$_SESSION['count']=0;
else
	$_SESSION['count']++;
/*echo $_SESSION['count']."<br />";*/
if(isset($_POST['username'])){
	//echo "You entered ".$_POST['username'];
	if($_POST['username']==""){
		echo json_encode(array('errcode' => 4));
		die();
		//echo $wrong.'<span class="formError">Please enter a username.</span>';
	}elseif(!preg_match('/^([a-zA-Z0-9]*)$/',$_POST['username'])){
		echo json_encode(array('errcode' => 3));
		die();
	}elseif(userExists($_POST['username'])){
		echo json_encode(array('errcode' => 2));
		die();
		//echo $wrong.'<span class="formError">Username already exists. Try another.</span>';
	}
	else{
		echo json_encode(array('errcode' => 0));
		die();
		//echo $right;
	}
}
else{
	echo json_encode(array('errcode' => 1));
	//echo $wrong.'<span class="formError">An error occurred.</span>';
}
/*echo "studd";/*json_encode($return);*/
?>
