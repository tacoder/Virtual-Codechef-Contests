<?php 
die();
require_once('includes/connect.php');
set_time_limit (0);
$tstart = time();
echo "Parsing started at:".$tstart."<br />";

//Returns whether $year is leap or not.
function isLeap($year){
    return ($year % 4 == 0)&&($year%100!=0||$year%400==0);
}

//Returns number of seconds in a month. --i guess
function secMonths($month,$year){
    $nDay = array(0,31,59,90,120,151,181,212,243,273,304,334);
    $nDayLeap = array(0,31,60,91,121,152,182,213,244,274,305,335);
    if(isLeap($year))
        return $nDayLeap[$month-1]*86400;
    return $nDay[$month-1]*86400;
}

//Turns $str in format '2014-08-01 15:00:00' to unix timestamp
function toUnix($str){
    //Unix timestamp of jan 1st from 1970 to 2020
    $unixTS = array(0,31536000,63072000,94694400,126230400,157766400,189302400,
            220924800,252460800,283996800,315532800,347155200,378691200,
            410227200,441763200,473385600,504921600,536457600,567993600,
            599616000,631152000,662688000,694224000,725846400,757382400,
            788918400,820454400,852076800,883612800,915148800,946684800,
            978307200,1009843200,1041379200,1072915200,1104537600,1136073600,
            1167609600,1199145600,1230768000,1262304000,1293840000,1325376000,
            1356998400,1388534400,1420070400,1451606400,1483228800,1514764800,
            1546300800);

    //Explodes string to all possible integers found inside string.
    preg_match_all('!\d+!', $str, $matches);
    
    $startTime =  $unixTS[$matches[0][0]-1970];
    $startTime += secMonths($matches[0][1],$matches[0][0]);
    $startTime += 86400*($matches[0][2]-1);
    $startTime += $matches[0][3]*3600;
    $startTime += $matches[0][4]*60;
    $startTime += $matches[0][5];

    return $startTime;
}


$con = selectOrCreateDatabase("contests");

//$rlog = fopen("ranks.txt","a+");
function add_contest_rankings($code){
    global $rlog;
    global $con;
    $MAXPAGE = 100000;
    $contest = json_decode(file_get_contents('http://www.codechef.com/api/rankings/'.$code.'?sortBy=rank&order=asc&page=1&itemsPerPage=100'),true);
    $sqlq = "update list set type='".$contest['contest_info']['type']."' where code='".$code."'\n";
    fwrite($rlog, $sqlq);
    if(!mysqli_query($con,$sqlq)){
         echo "Unsuccessful query: ".$sqlq." : ".mysqli_error($con)."<br />";
    }

    $sqlq="create table ".$contest['contest_info']['contest_code']."_rank (rank int, handle varchar(14) primary key, score float, time bigint(20), penalty int ";
    
    foreach ($contest['problems'] as $pcode) {
        $sqlq .= ", ".$pcode['code']."_score float default 0 ";
        if($contest['contest_info']['type'] == '1'){
            $sqlq .= ", ".$pcode['code']."_time bigint(20) default 0 ";
            $sqlq .= ", ".$pcode['code']."_penalty int default 0 ";
        }
    }

    $sqlq .= ");\n";
    fwrite($rlog, $sqlq);
    echo $sqlq."<br />";


    if(!mysqli_query($con,$sqlq)){
         echo "Unsuccessful query: ".$sqlq." : ".mysqli_error($con)."<br />";
         echo "<br />Dying<br />";
    //     die();
    }

    $curPage = 1;

    do{
        $curPage += 1;
        foreach ($contest['list'] as $row) {
            $sqlq_head = "insert into ".$contest['contest_info']['contest_code']."_rank (rank , handle , score , time , penalty ";
            $sqlq_tail = ") values (".$row['rank'].", '".$row['user_handle']."', ".$row['score'].", '".toUnix("1970-01-01 ".$row['total_time'])."', ".$row['penalty'];
            
            foreach ($row['problems_status'] as $pcode => $pvalue) {
                $sqlq_head .= ", ".$pcode."_score";
                $sqlq_tail .= ", '".$pvalue['score']."'";
                if($contest['contest_info']['type'] == '1'){
                    $sqlq_head .= ", ".$pcode."_time";
                    $sqlq_head .= ", ".$pcode."_penalty";
                    $sqlq_tail .= ", '".toUnix("1970-01-01 ".$pvalue['time'])."'";
                    $sqlq_tail .= ", '".$pvalue['penalty']."'";
                }
            }
            $sqlq = $sqlq_head.$sqlq_tail.");\n";
            echo $sqlq."<br />";
            fwrite($rlog, $sqlq);
            if(!mysqli_query($con,$sqlq)){
                 echo "Unsuccessful query: ".$sqlq." : ".mysqli_error($con)."<br />";
            }
        }
        $contest = json_decode(file_get_contents('http://www.codechef.com/api/rankings/'.$code.'?sortBy=rank&order=asc&page='.$curPage.'&itemsPerPage=100'),true);

    }while ($curPage<=$contest['availablePages']);
}
$query = mysqli_query($con,"select code from list order by end");

while ($row = mysqli_fetch_assoc($query)){ 
    add_contest_rankings($row["code"]);
}

$tend = time();
echo "Parsing ended at:".$tend."<br />";
echo "Total Time taken =".($tend-$tstart);
?>















