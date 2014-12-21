<?php
require('includes/simple_html_dom.php');
require('includes/connect.php');
set_time_limit (0);
if(!mysqli_select_db($con, "contests")){
	if(!mysqli_query($con,"create database contests")){
		echo "Cannot create database!!".mysqli_error($con);
		die();
	}
	
}

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

function add_problem($pcode,$code,$name){
	$contPage=/*file_get_html('http://www.codechef.com/problems/'.$pcode);*/
	file_get_html('http://www.codechef.com/problems/'.$pcode, false, null,  -1, -1,  true, true,  DEFAULT_TARGET_CHARSET,false);
	//echo $contPage;
	$file = fopen("contest/".$code."/".$pcode.".php","w");
	//echo $contPage;
	fwrite($file,'<?php require("../../includes/header.php"); ?>');
	fwrite($file,"<h1>$name</h1>");
	foreach($contPage->find('div[class="primary-col-wrapper"]') as $outerdiv){
		echo '1';
		foreach($outerdiv->find('div[class="primary-colum-width-left"]') as $div){
			echo '2';
			foreach($div->children(0)->find('div[class="content"]') as $content){
				echo '3';
				foreach($content->find('h3') as $head){
					$value = $head->innertext;
					if($value == "All submissions for this problem are available."){
						$head->outertext = "";
					}
				}
				fwrite($file, $content);
			}
			foreach($div->children(0)->find('table') as $table){
				foreach($table->find('tr') as $tr){
					$value=$tr->children(0)->innertext;
					if($value == "Editorial" || $value == "Tags")
						$tr->outertext = "";
				}
				fwrite($file,$table);
			}
		}
	}

	fwrite($file,'<?php require("../../includes/footer.php"); ?>');
}


function add_index($code){
	$file = fopen("contest/".$code."/index.php","w");
	fwrite($file,'<?php require("../../includes/header.php"); ?>');
	fwrite($file,'<?php require("../../includes/all_problems.php"); ?>');
	fwrite($file,'<?php require("../../includes/footer.php"); ?>');
}
function add_contest($code){
	if(!isset($_GET['fast']))
		mkdir("contest/".$code, 0777, true);
	global $con;
	$contPage=file_get_html('http://www.codechef.com/'.$code);
	
	if(mysqli_query($con,"CREATE TABLE ".$code."( name varchar(100), code varchar(15) unique key, SuccSub int, Accuracy decimal(4,2));")){
		foreach($contPage->find('div[class="table-questions"]') as $div){
			foreach($div->find('table[class="problems"]') as $table){
				foreach($table->find('tr[class=problemrow]') as $tr){
					$name= trim($con->real_escape_string($tr->children(0)->plaintext), " \t\n\r\0\x0B" );
					$pcode= $con->real_escape_string($tr->children(1)->plaintext);
					$succsub= $tr->children(2)->plaintext;
					$acc= $tr->children(3)->plaintext;
					if(!isset($_GET['fast']))
						add_problem($pcode,$code,$name);
					if(mysqli_query($con,"insert into ".$code." values('".$name."','".$pcode."','".$succsub."','".$acc."');")){
						echo "Elements inserted into ".$code."('".$name."','".$pcode."','".$succsub."','".$acc."')";
					} else {
						echo "Error inserting into table: " . mysqli_error($con);
					}
					echo "<br />";
				}
			}
		}
		add_index($code);
	}
	else{
		echo "Error Creating table ".$code.":".mysqli_error($con)."<br />";
	}
	// ---  add contest pages...
	flush();
}

$tstart = time() ;
echo "Parsing started at:".$tstart;
if(!mysqli_query($con,'select 1 from lists')){
	mysqli_query($con,'CREATE TABLE list(code varchar(20) not null,name varchar(200) not null primary key,start bigint not null,end bigint not null);');
}
$html=file_get_html('http://www.codechef.com/contests');
foreach($html->find('div[id="statusdiv"]') as $div){
	foreach($div->find('table') as $table){
		foreach ($table->find('tr') as $tr) {
			if($tr->class!="headerrow")
			{
			$code =  $con->real_escape_string($tr->children(0)->plaintext);
			$name =  $con->real_escape_string($tr->children(1)->plaintext);
			$start = toUnix($tr->children(2)->plaintext);
			$end = toUnix($tr->children(3)->plaintext);
			if($end < $tstart)
				if(mysqli_query($con,"insert into list values('".$code."','".$name."','".$start."','".$end."');")){
					echo "Elements inserted into list('".$code."','".$name."','".$start."','".$end."')";
					add_contest($code);
				} else {
					echo "Error inserting into table: " . mysqli_error($con);
				}
				echo "<br />";
			}
		}
	}                         
}
$tend = time();
echo "Parsing started at:".$tend;
echo "<br />";
echo "Total Time taken =".($tend-$tstart);
?>
