<?php 

require('includes/connect.php');

if(!mysqli_select_db($con, "contests")){
    if(!mysqli_query($con,"create database contests;")){
        echo "Cannot create database!!".mysqli_error($con);
        die();
    } else {
        mysqli_select_db($con, "contests");
    }
    
}

$jsList = fopen("includes/compete.js","w+");

$query = mysqli_query($con,"select code,name,end from list");
//$resultArray = mysqli_fetch_all($query);

//print_r($resultArray);



while ($row = mysqli_fetch_assoc($query)) {
        
        echo "Code: ".$row["code"]."<br />";
        echo "Name: ".$row["name"]."<br />";
        echo "end".$row["end"]."<br />";
    }

?>