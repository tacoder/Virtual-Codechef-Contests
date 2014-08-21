<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_dbname = "contests";
$con = mysqli_connect($mysql_host, $mysql_user,$mysql_pass);
if(mysqli_connect_errno()){
	echo "failed to connect to mySQL: ".mysqli_connect_error();
}
else{
	echo "connection successful!!";
}
mysqli_select_db($con, "contests");
mysqli_query($con,"");
mysqli_close($con);
?>