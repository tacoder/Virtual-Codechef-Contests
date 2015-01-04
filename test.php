<?php 
require('includes/connect.php');
set_time_limit (0);

if(!mysqli_select_db($con, "contests")){
    if(!mysqli_query($con,"create database contests;")){
        echo "Cannot create database!!".mysqli_error($con);
        die();
    } else {
        mysqli_select_db($con, "contests");
    }
    
}
$code = "DEC14";
$MAXPAGE = 100000;
for ($page = 1; $page <= 1/*$MAXPAGE*/; $page++) { 
    $contest = json_decode(file_get_contents('http://www.codechef.com/api/rankings/'.$code.'?sortBy=rank&order=asc&page='.$page.'&itemsPerPage=100'),true);
    //Array ( [contest_code] => MARCH09 [type] => 3 [is_team_based] => )
    echo $contest['contest_info']['contest_code'];
    echo $contest['contest_info']['type'];
    if($contest['contest_info']['is_team_based'])
        echo "yes";
    echo sizeof($contest['problems']);


    $MAXPAGE = $contest['availablePages'];
    echo "new max = ".$MAXPAGE;
}




?>















