<?php 
session_start();
if(isset($_GET['ccode'],$_SESSION['username'])){
	echo $_GET['ccode']."<br />";
	echo $_SESSION['username']."<br />";
	echo $_SESSION['handle']."<br />";
}

?>