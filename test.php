
<?php
include_once('simple_html_dom.php');
include_once('connect.php');

if(!mysqli_select_db($con, "contests"))
	echo "Cannot open database!!";

function isLeap($year){
	return ($year % 4 == 0)&&($year%100!=0||$year%400==0);
}

function secMonths($month,$year){
	$nDay = array(0,31,59,90,120,151,181,212,243,273,304,334);
	$nDayLeap = array(0,31,60,91,121,152,182,213,244,274,305,335);
	if(isLeap($year))
		return $nDayLeap[$month-1]*86400;
	return $nDay[$month-1]*86400;
}


function toUnix($str){
	# $str = '2014-08-01 15:00:00';
	$unixTS = array(31536000,63072000,94694400,126230400,157766400,189302400,220924800,252460800,283996800,315532800,347155200,378691200,410227200,441763200,473385600,504921600,536457600,567993600,599616000,631152000,662688000,694224000,725846400,757382400,788918400,820454400,852076800,883612800,915148800,946684800,978307200,1009843200,1041379200,1072915200,1104537600,1136073600,1167609600,1199145600,1230768000,1262304000,1293840000,1325376000,1356998400,1388534400,1420070400,1451606400,1483228800,1514764800,1546300800);

	
	preg_match_all('!\d+!', $str, $matches);
	
	$startTime =  $unixTS[$matches[0][0]-1970-1];
	$startTime += secMonths($matches[0][1],$matches[0][0]);
	$startTime += 86400*($matches[0][2]-1);
	$startTime += $matches[0][3]*3600;
	$startTime += $matches[0][4]*60;
	$startTime += $matches[0][5];
	return $startTime;
	#echo $startTime;
	#echo "<br >";
}

function add_contest($code){
	$contPage=file_get_html('http://www.codechef.com/'.$code);
	foreach($contPage->find('div[class="table-questions"]') as $div){
		foreach($div->find('table[class="problems"]') as $table){
			foreach($table->find('tr[class=problemrow]') as $tr){
				//foreach($tr->find('td') as $td){
					echo $tr->children(0)->plaintext."<br />";
					echo $tr->children(1)->plaintext."<br />";
					echo $tr->children(2)->plaintext."<br />";
					echo $tr->children(3)->plaintext."<br />";

				//}
			}
		}
	}

}

$t = time();
echo "current time is:".$t;
$html=file_get_html('http://www.codechef.com/contests');
#CLASS = table-questions id=statusdiv
foreach($html->find('div[id="statusdiv"]') as $div){
	foreach($div->find('table') as $table){
		foreach ($table->find('tr') as $tr) {
			if($tr->class!="headerrow")
			{
				#$mysqli->real_escape_string($city);
			$code =  $con->real_escape_string($tr->children(0)->plaintext);
			$name =  $con->real_escape_string($tr->children(1)->plaintext);
			$start = toUnix($tr->children(2)->plaintext);
			$end = toUnix($tr->children(3)->plaintext);
			if($end < $t)
				#echo "(".$code.",".$name.",".$start.",".$end.")<br />";
				if(mysqli_query($con,"insert into list values('".$code."','".$name."','".$start."','".$end."');")){
					echo "inserted elements successfully('".$code."','".$name."','".$start."','".$end."')";
					add_contest($code);
				} else {
					echo "Error inserting into table: " . mysqli_error($con);
				}
				echo "<br />";
			}
		}
	}                         
}
?>