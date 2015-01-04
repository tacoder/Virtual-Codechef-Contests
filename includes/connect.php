<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
#$mysql_dbname = "contests";
$con = mysqli_connect($mysql_host, $mysql_user,$mysql_pass);
if(mysqli_connect_errno()){
	echo "failed to connect to mySQL: ".mysqli_connect_error();
}
else{
	//echo "connection successful!!";
}

function selectOrCreateDatabase($db,$die = true){
    global $con;
    if(!mysqli_select_db($con, $db)){
        if(!mysqli_query($con,"create database ".$db.";")){
            echo "Cannot create database!!".mysqli_error($con);
            if($die == true)
                die();
        } else {
            mysqli_select_db($con, $db);
        }
        
    }
    return $con;
}

?>