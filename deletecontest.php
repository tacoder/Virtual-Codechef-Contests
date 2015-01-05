<?php 
if(isset($_GET['code'])){
require_once("includes/connect.php");
if(!mysqli_select_db($con, "contests")){
	echo json_encode(array('errcode' => 1));
	// --- If error occurs here, Add functionality to log the error rather than displaying it to the user
	//echo "Cannot open database!!".mysqli_error($con)."<br />";
	die();
}
$qr = 'DROP TABLE '.$_GET['code'].';';
mysqli_query($con,$qr);
echo $qr."<br />";
echo mysqli_error($con)."<br />";
$qr = 'DELETE FROM `list` WHERE `code`=\''.$_GET['code'].'\' LIMIT 1;';
mysqli_query($con,$qr);
echo $qr."<br />";
echo mysqli_error($con)."<br />";
}?>