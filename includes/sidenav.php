
<?php
  $url = explode('/',$_SERVER["PHP_SELF"]);
  if($url[1] == "virtualcode" && $url[2] == "contest"){
  	include_once('../../includes/connect.php');
	if(!mysqli_select_db($con, "contests")){
		echo "Cannot open database!!".mysqli_error($con);
	}
	echo  '<div class="sidenavlink"><a href="contest/'.$con->real_escape_string($url[3]).'/index.php" >All problems</a></div>';
	$query = mysqli_query($con,"select code,name from ".$con->real_escape_string($url[3]).";");
	$result = $query->fetch_all( MYSQLI_ASSOC);
	foreach( $result as $row ){
	   $c = $row['code'];
	   $r = $row['name'];
	   echo  '<div class="sidenavlink"><a href="contest/'.$con->real_escape_string($url[3]).'/'.$c.'.php" >'.$r.'</a></div>';
	} 
  }

?>