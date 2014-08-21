<?php
$right = '<img id="usernameconfirm" src="right.png" style="padding-left:3px;">';
$wrong = '<img id="passwordconfirm" src="wrong.png" style="padding-left:3px;">';
session_start();
function ifUserExists($usern){
	if($usern == "tacoder")
		return true;
	else
		return false;
}
if(!isset($_SESSION['count']))
	$_SESSION['count']=0;
else
	$_SESSION['count']++;
/*echo $_SESSION['count']."<br />";*/
if(isset($_POST['username'])){
	//echo "You entered ".$_POST['username'];
	if(ifUserExists($_POST['username'])){
	echo $wrong.'<span style="color:red">Username already exists. Try another.</span>';
	}
	else{
	echo $right;
	}
}
else{

	echo $wrong.'<span style="color:red">An error occurred.</span>';
}
/*echo "studd";/*json_encode($return);*/
?>