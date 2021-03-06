<?php 

require_once('includes/simple_html_dom.php');
require_once('includes/connect.php');

session_start();
function multiRequest($data, $options = array()) {
	// array of curl handles
	$curly = array();
	// data to be returned
	$result = array();
	// multi handle
	$mh = curl_multi_init();
	// loop through $data and create curl handles
	// then add them to the multi-handle
	foreach ($data as $id => $d) {
		$curly[$id] = curl_init();
		$url = (is_array($d) && !empty($d['url'])) ? $d['url'] : $d;
		curl_setopt($curly[$id], CURLOPT_URL, $url);
		curl_setopt($curly[$id], CURLOPT_HEADER, 0);
		curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1);
		// post?
		if (is_array($d)) {
			if (!empty($d['post'])) {
				curl_setopt($curly[$id], CURLOPT_POST, 1);
				curl_setopt($curly[$id], CURLOPT_POSTFIELDS, $d['post']);
			}
		}
		// extra options?
		if (!empty($options)) {
			curl_setopt_array($curly[$id], $options);
		}
		curl_multi_add_handle($mh, $curly[$id]);
	}
	curl_multi_setopt($mh, CURLMOPT_MAXCONNECTS, 2);
	// execute the handles
	$running = null;
	do {
	curl_multi_exec($mh, $running);
	} while($running > 0);
	// get content and remove handles
	foreach($curly as $id => $c) {
		$result[$id] = curl_multi_getcontent($c);
		curl_multi_remove_handle($mh, $c);
	}
	// all done
	curl_multi_close($mh);
	return $result;
} // end of multiRequest

function returnError($errcode){
	echo $errcode;
}

$st = time();
echo "script started at:";
echo $st;
echo "<br />";

if(isset($_GET['ccode'],$_SESSION['username'],$_GET['ctype'])){
	$ccode = $_GET['ccode'];
	$timeout = 3;
	require_once('includes/simple_html_dom.php');
	require_once("includes/connect.php");
	selectOrCreateDatabase("users");

	$curtime = time();
	$qr = 'select * from '.$con->real_escape_string($_SESSION['username']).' where end > '.$curtime.' and contestcode = "'.$ccode.'";';
	$query = mysqli_query($con,$qr);
	if(!$query){
		echo "Unsuccessful query:".$qr."<br />";
		echo "error num:".mysqli_errno($con).":::".mysqli_error($con);
	}
	if( $query->num_rows == 0 )
		$isSolving = false;
	else
		$isSolving = true;

	if(!$isSolving)
		returnError("User is not solving this problem right now lol.");
	selectOrCreateDatabase("logs");
	$checkTime = $curtime - $timeout;
	$qr = 'select * from updatelogs where time > '.$checkTime.' and username = "'.$_SESSION['username'].'";';
	$query = mysqli_query($con,$qr);
	if(!$query){
		echo "Unsuccessful query:".$qr."<br />";
		echo "error num:".mysqli_errno($con).":::".mysqli_error($con);
	}
	if(mysqli_errno($con) == 1146){
		$qr = "create table updatelogs (ip varchar(15),time bigint not null, username varchar(14),`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,    PRIMARY KEY  (`id`) ,    INDEX  (`id`) );";
		$query = mysqli_query($con,$qr);
		if(!$query){
			echo "Unsuccessful query:".$qr."<br />";
			echo "error:".mysqli_error($con);
			die();
		} else {
			$qr = 'select * from updatelogs where time > '.$checkTime.' and username = "'.$_SESSION['username'].'";';
			echo $qr."<br />";
			$query = mysqli_query($con,$qr);
			if(!$query){
				echo "Unsuccessful query:".$qr."<br />";
				echo "error:".mysqli_error($con);
				die();
			}
		}

	}	
	
	$rowcount = mysqli_num_rows($query);
	if($rowcount == 0) {
		echo "No request made ".$timeout." Seconds ago.<br />";
	} else {
		echo $rowcount;
		echo "similar request happened less than ".$timeout." secs ago<br />";
		die();
	}
	$qr = 'insert into updatelogs(ip,time,username) value ("'.$_SERVER['REMOTE_ADDR'] .'","'.$curtime.'","'.$_SESSION['username'].'")';
	$query = mysqli_query($con,$qr);
	if(!$query){
		echo "Unsuccessful query:".$qr."<br />";
		echo "error:".mysqli_error($con);
	} else {
		echo "Successful query:".$qr."<br />";
	}
	if(!mysqli_select_db($con, "contests")){
		echo "Cannot open database!!".mysqli_error($con);
	}
	$query = mysqli_query($con,"select code,name from ".$ccode." order by code;");
	$result = $query->fetch_all( MYSQLI_ASSOC);
	$tofetch = array();
	foreach( $result as $row ){
	   $tofetch[$row['code']]='http://www.codechef.com/status/'.$row['code'].','.$_SESSION['handle'].'';
	   echo 'http://www.codechef.com/status/'.$row['code'].','.$_SESSION['handle'].'';
	   echo '<br />';
	} 

$pages = multiRequest($tofetch);
$toReturn['iserror'] = false;

//print_r($pages);

foreach ($pages as $key => $value) {
	$page=str_get_html($value);

	foreach($page->find('div[id="primary-content"]') as $odiv){
	  foreach ($odiv->find('div[class="tablebox-section l-float"]') as $div) {
	    foreach($div->find('table') as $table){
	      foreach ($table->find('tr[class="kol"]') as $tr) {
	        if($tr->plaintext == "No Recent Activity"){
	          $toReturn['problems'][$key]['solved'] = false;
	          goto finish;
	        } else {
	          $toReturn['problems'][$key]['solved'] = true;
	        }
	      }
	    }
	  }
	}
	finish:
}

} else {
	if(!isset($_SESSION['username']))
		returnError("User not logged in.");
	else
		returnError("No contest code specified.");
}
$en = time();
echo "script ended at:";
echo $en;
echo "<br />";
echo "total time:";
echo $en-$st;

echo json_encode($toReturn);
?>