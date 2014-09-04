<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Virtual codechef contests</title>

	<base href="../.." src = "../..">
	<link rel="stylesheet" type="text/css" href="index.css" />
	<link rel="icon" href="favicon.ico" type="../image/x-icon"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="includes/topnav.js"></script>
</head>
<body>
	<div id="topnav">
		<?php include_once("topnav.php");?>
	</div>



	<div id="sidenav">
		<?php include_once("sidenav.php");?>
	</div>
	
	<div  id="maincontent">
		<?php 
		function inProgress($code){
			return true;
		}
	$url = explode('/',$_SERVER["PHP_SELF"]);
	$code = $url[3];

	if(! (isset($_SESSION['loggedIn']) && (inProgress($code)) ) )
		 header('Location: ../../login.php?error=You+must+login+before+starting+a+contest');  
?>