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
	echo '</div><div id="submitButton" style="display:block"><a id="submitLink" href="http://www.codechef.com/submit/'.substr($url[4], 0, -4).'" target="_BLANK">Submit</a>';
	echo '<a id="submitLink" href="http://www.codechef.com/status/'.substr($url[4], 0, -4).','.$handle.'" target="_BLANK">My submissions</a></div>';
	}?>
	</div>
</body>

</html>
