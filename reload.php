<?php
/*
 *  This script automates adding new contests to the website.
 * 
 *  Add ?fast at the end of link to reduce time of script.
 *  --Adding ?fast makes the script parse only the contest index not the  
 *  --problems themselves.
 *  
 *  
 * 
 */

/*
 *  Include required external scripts.
 *  simple_html_dom.php helps parsing of html documents
 *  connect.php connects to mysql database and includes helper functions.
 */
require_once('includes/simple_html_dom.php');
require_once('includes/connect.php');

// Set time limit of script to infinity
set_time_limit (0);

//log starting time of script.
$tstart = time();

echo "Parsing started at:".$tstart;


$con = selectOrCreateDatabase("contests");

//Create table list if it does not exist already.
if(!mysqli_query($con,'select 1 from list')){
	mysqli_query($con,'CREATE TABLE list(
		code varchar(20) not null,
		name varchar(200) not null primary key,
		start bigint not null,
		end bigint not null,
		type int not null);');
}

/*
 * test.txt is a file that includes previous sql queries made by script in the
 * past. Before parsing the codechef website, all queries from log.txt are made
 * so we don't have to parse previously parsed pages. This helps quickly 
 * populating sql tables when the website is installed in a new server.
 */
$log = fopen("test.txt","a+");
// seek to beginning as a+ sets pointer to end of file.
fseek($log,0);

// log for ranklist
$rlog = fopen("ranks.txt","a+");

// Read sql queries from test.txt and perform them until we read eof.

if(!isset($_GET['fast']))
while(!feof($log)){
	$sqlq = fgets($log);

	if($sqlq == "") continue;

	if(mysqli_query($con,$sqlq)){
		echo "Successful query: ".$sqlq."<br />";
	} else {
		echo "Unsuccessful query: ".$sqlq." : ".mysqli_error($con)."<br />";
	}
}


$con = selectOrCreateDatabase("rankings");

if(!isset($_GET['fast']))
while(!feof($rlog)){
	$sqlq = fgets($rlog);

	if($sqlq == "") continue;

	if(mysqli_query($con,$sqlq)){
		echo "Successful query: ".$sqlq."<br />";
	} else {
		echo "Unsuccessful query: ".$sqlq." : ".mysqli_error($con)."<br />";
	}
}

$con = selectOrCreateDatabase("contests");
/* Set seek to end so we can write any new queries made during the run of this 
 * script
 */
fseek($log, 0, SEEK_END);

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

//Add rankings for contests.
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


/*
 * Parses problem($pcode) in contest($code) and creates .php inside the contest
 * folder. 
 */
function add_problem($pcode,$code,$name){
	/* These parameters ensures whitespace isn't thrown away when 
	 * html page is fetched, otherwise <pre> tags didn't work perfectly.
	 */
	$contPage = file_get_html('http://www.codechef.com/problems/'.$pcode, 
		false, null,  -1, -1,  true, true,  DEFAULT_TARGET_CHARSET,false);
	
	$file = fopen("contest/".$code."/".$pcode.".php","w");
	fwrite($file,'<?php require_once("../../includes/header.php"); ?>');
	fwrite($file,"<h1>$name</h1>");
	foreach($contPage->find('div[class="primary-col-wrapper"]') as $outerdiv){
	  foreach($outerdiv->find('div[class="primary-colum-width-left"]') as $div){
	    foreach($div->children(0)->find('div[class="content"]') as $content){
	    	 /* Remove any <h3> tags that have value as 
	    	  * "All submissions for this problem are available."
	    	  */
	      foreach($content->find('h3') as $head){
	        $value = $head->innertext;
	        if($value == "All submissions for this problem are available."){
	        	$head->outertext = "";
	        }
	      }
	      fwrite($file, $content);
	    }

	    /* If there are any fields of Editorial or Tags, remove them
	     * before writing table to file.
	     */
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

	fwrite($file,'<?php require_once("../../includes/footer.php"); ?>');
}

/*
 * Adds index.php to contest folders.
 */
function add_index($code){
	$file = fopen("contest/".$code."/index.php","w");
	fwrite($file,'<?php require_once("../../includes/header.php"); ?>');
	fwrite($file,'<?php require_once("../../includes/all_problems.php"); ?>');
	fwrite($file,'<?php require_once("../../includes/footer.php"); ?>');
}

/*
 * Adds new contest specififec by contest $code.
 * Creates new table for contest and adds problem name, code, submissions, 
 * and accuracy.
 * if fast mode is disabled, calls add_problem and add_index
 * Adds rankings for the contest in the end
 */
function add_contest($code){
	global $log;
	global $con;
	
	// Make directory for contest only if fast mode is disabled.
	if(!isset($_GET['fast']))
		mkdir("contest/".$code, 0777, true);
	
	$contPage=file_get_html('http://www.codechef.com/'.$code);
	
	//New table for contest.
	$sqlq = "CREATE TABLE ".$code."( 
			name varchar(100), 
			code varchar(15) unique key, 
			SuccSub int, 
			Accuracy decimal(4,2));\n";	
	fwrite($log, $sqlq); //Log sql query
	
	if(mysqli_query($con,$sqlq)){
	// Parsing of contest table for problems
	 foreach($contPage->find('div[class="table-questions"]') as $div){
	   foreach($div->find('table[class="problems"]') as $table){
	     foreach($table->find('tr[class=problemrow]') as $tr){
	       $name= trim($con->real_escape_string($tr->children(0)->plaintext), 
	       	                                               " \t\n\r\0\x0B" );
	       $pcode= $con->real_escape_string($tr->children(1)->plaintext);
	       $succsub= $tr->children(2)->plaintext;
	       $acc= $tr->children(3)->plaintext;

	       //Add new problem only if fast mode is disabled.
	       if(!isset($_GET['fast']))
	       	add_problem($pcode,$code,$name);
	       	
	       $sqlq = "insert into ".$code." values('"
	       	                               .$name."','"
	       	                               .$pcode."','"
	       	                               .$succsub."','"
	       	                               .$acc."');\n";	
	       fwrite($log, $sqlq);
	       if(mysqli_query($con,$sqlq)){
	       	echo "Elements inserted into "
	       	                   .$code."('"
	       	                   .$name."','"
	       	                   .$pcode."','"
	       	                   .$succsub."','"
	       	                   .$acc."')<br />";
	       } else {
	       	echo "Error inserting into table: " . mysqli_error($con);
	       }
	     }
	   }
	 }
		if(!isset($_GET['fast']))
		add_index($code);
	}
	else{
		echo "Error Creating table ".$code.":".mysqli_error($con)."<br />";
	}
	// ---  add contest pages...
	add_contest_rankings($code);
} // End of add_contest

/* Select maximum end time from list. This tells us the most recent 
 * contest added so we stop parsing once we reach that contest
 */
$query = mysqli_query($con,'select max(end) from list;');
$arr = mysqli_fetch_assoc($query);
// set $tmin to max(end) received or 0 if not received.
if( $query->num_rows != 0 )
	$tmin = $arr['max(end)'];
else
	$tmin = 0;


$html=file_get_html('http://www.codechef.com/contests');

//Parseing of contests table.
foreach($html->find('div[id="statusdiv"]') as $div){
  foreach($div->find('table') as $table){
    foreach ($table->find('tr') as $tr) {
      if($tr->class!="headerrow"){
        
        $code =  $con->real_escape_string($tr->children(0)->plaintext);
        $name =  trim($con->real_escape_string($tr->children(1)->plaintext));
        $start = toUnix($tr->children(2)->plaintext);
        $end = toUnix($tr->children(3)->plaintext);
        $sqlq = "insert into list values('"
					        			.$code."','"
					        			.$name."','"
					        			.$start."','"
					        			.$end."');\n";
        
        if( $end < $tstart && $end > $tmin){
        	if(mysqli_query($con,$sqlq)){
        		fwrite($log, $sqlq);
        		echo "Elements inserted into list('"
        								.$code."','"
        								.$name."','"
        								.$start."','"
        								.$end."')<br />";
        		add_contest($code);
        	} else {
        		echo "Error inserting into table: " . mysqli_error($con);
        	}
        }

      }
    }
  }
}



$jsList = fopen("includes/compete.js","w+");

$query = mysqli_query($con,"select code,name,end from list order by name");

fwrite($jsList, "var contests=Array(");

while ($row = mysqli_fetch_assoc($query)) {
    fwrite($jsList, 'Array("'.$row["name"].'","'.$row["code"].'","'.$row["end"].'"),'."\n");
    echo "Code: ".$row["code"]."<br />";
    echo "Name: ".$row["name"]."<br />";
    echo "end".$row["end"]."<br />";
}


fseek($jsList,-2,SEEK_CUR);

fwrite($jsList,');function searchTerm(){
        console.log("sedarch called");
        var term = $("#search-form input[type=\'text\']").val();
        var category = $("#search-form select").val();
        console.log("term = :"+term);
        console.log("category = :"+category);

        for (contest of contests){ 
            var str=contest[0];
            var regexp = new RegExp(term,"i");
            var test = str.search(regexp);
            console.log("regexp="+regexp);
            //console.log("test="+test);
            //console.log("str="+str);

            if(test != -1){
                console.log("Concluded true for "+contest[0]+" where term = "+term);
                document.getElementById(contest[1]).style.display = "block";
            } else {
                //console.log("Concluded false for "+contest[0]+" where term = "+term);
                document.getElementById(contest[1]).style.display = "none";    
            }   
        }
    }

 $(document).ready(function() {
    for (contest of contests){
        var end = new Date(parseInt(contest[2])*1000);
        var newdiv = document.createElement("a");
        newdiv.setAttribute("href","refer.php?code\'"+contest[1]);
        newdiv.innerHTML=\'<div class="search-result" id="\'+contest[1]+\'"><div class="search-result-name">\'+contest[0]+\'</div><div class="search-result-end">\'+end.toDateString()+\'</div></div>\'
        document.getElementById("search-result-container").appendChild(newdiv) ;
    }

    

    $("#search-form").submit(function(event){
        search();
        event.preventDefault();
    });

    $("#search-form input[type=\'text\']").keyup(function(){
        searchTerm();
    });
    
    $("#search-form select").change(function(){
        searchSelect();
    });

});');


$tend = time();
echo "Parsing started at:".$tend."<br />";
echo "Total Time taken =".($tend-$tstart);
?>
