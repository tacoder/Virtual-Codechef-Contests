<?php
$url = explode('/',$_SERVER["PHP_SELF"]);
if($url[4] != "index.php") 
{
  require("connect.php");
	if(!mysqli_select_db($con, "users")){
		echo "Cannot open database!!".mysqli_error($con)."<br />";
		die("Tell my wife i love her.");
	}
	$qr = "select * from logininfo where username = '".$_SESSION['username']."';";
	$qres = mysqli_query($con,$qr);
	$data = $qres->fetch_assoc();
	$handle = $data['handle'];
	/*echo $_SERVER["PHP_SELF"]; */
	echo '<a href="http://www.codechef.com/submit/'.substr($url[4], 0, -4).'" target="_BLANK"><div id="submitButton">Submit</div></a>';
	echo '<a href="http://www.codechef.com/status/'.substr($url[4], 0, -4).','.$handle.'" target="_BLANK"><div id="submitButton">My submissions</div></a>';
	}?>
	</div>
</body>

</html>
