<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Virtual codechef contests</title>
	<link rel="stylesheet" type="text/css" href="index.css" />
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
		<p>Select a contest</p>
	<form name="login-form" action="refer.php" method="post">
		<select name = "code">
			<option value = "BLANK" selected></option>
			<?php
				require("includes/connect.php");
				if(!mysqli_select_db($con, "contests")){
					echo "Cannot open database!!".mysqli_error($con);
				}
				$query = mysqli_query($con,"select code,name from list order by end desc");
				$result = $query->fetch_all( MYSQLI_ASSOC);
				foreach( $result as $row ){
				   $c = $row['code'];
				   $r = $row['name'];
				   echo '<option value = "'.$row['code'].'">'.$row['name'].'</option>';
				} 
			?>
		</select>
	</input>
	<input type="submit" value="Compete!">
</form>
	</div>
</body>

</html>
