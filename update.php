


<?php
 
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
    curl_setopt($curly[$id], CURLOPT_URL,            $url);
    curl_setopt($curly[$id], CURLOPT_HEADER,         0);
    curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1);
    
 
    // post?
    if (is_array($d)) {
      if (!empty($d['post'])) {
        curl_setopt($curly[$id], CURLOPT_POST,       1);
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
}/*
function multiRequest($data) {
 
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
    curl_setopt($curly[$id], CURLOPT_URL,            $url);
    curl_setopt($curly[$id], CURLOPT_HEADER,         0);
    curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1);
    
 
    // post?
    if (is_array($d)) {
      if (!empty($d['post'])) {
        curl_setopt($curly[$id], CURLOPT_POST,       1);
        curl_setopt($curly[$id], CURLOPT_POSTFIELDS, $d['post']);
      }
    }
 
 
    $result[$id] = curl_exec($curly[$id]);
  }
 
  // all done
  curl_multi_close($mh);
 
  return $result;
}*/


 
$data = array(
	'http://www.codechef.com/status/CLETAB,tacoder',
	'http://www.codechef.com/status/CRAWA,tacoder',
	'http://www.codechef.com/status/EQUAKE,tacoder',
	'http://www.codechef.com/status/MOU2H,tacoder',
	'http://www.codechef.com/status/PRGIFT,tacoder',
	'http://www.codechef.com/status/PUSHFLOW,tacoder',
	'http://www.codechef.com/status/REVERSE,tacoder',
	'http://www.codechef.com/status/SEASHUF,tacoder',
	'http://www.codechef.com/status/SIGFIB,tacoder',
	'http://www.codechef.com/status/TSHIRTS,tacoder'
);
$r = multiRequest($data);
 
echo '<pre>';
print_r($r);
 
?>


<?php 
session_start();
function returnError($errcode){
	echo $errcode;
}
$st = time();
echo "script started at:";
echo $st;
echo "<br />";

if(isset($_GET['ccode'],$_SESSION['username'])){
	$ccode = $_GET['ccode'];
	$timeout = 3;
	require('includes/simple_html_dom.php');
	require("includes/connect.php");
				if(!mysqli_select_db($con, "users")){
						echo mysqli_errno($con);
						// --- If error occurs here, Add functionality to log the error rather than displaying it to the user
						//echo "Cannot open database!!".mysqli_error($con)."<br />";
						die();
					}
					$curtime = time();
				$qr = 'select * from '.$con->real_escape_string($_SESSION['username']).' where end > '.$curtime.';';
				$query = mysqli_query($con,$qr);
				$isSolving = false;
				if(!empty($query))
					while ($row = mysqli_fetch_assoc($query)) {
				        if($row['contestcode'] == $ccode){
				        	$isSolving = true;
				        	break;
				        }
				    }
				if(!$isSolving)
					returnError("User is not solving this problem right now lol.");
				if(!mysqli_select_db($con, "logs")){
						echo mysqli_errno($con);
						// --- If error occurs here, Add functionality to log the error rather than displaying it to the user
						//echo "Cannot open database!!".mysqli_error($con)."<br />";
						die();
					}
				$checkTime = $curtime - $timeout;
				$qr = 'select * from updatelogs where time > '.$checkTime.' and username = "'.$_SESSION['username'].'";';
				echo $qr."<br />";
				$query = mysqli_query($con,$qr);
				$rowcount = mysqli_num_rows($query);
				if($rowcount == 0) {
					echo "perfect query ";
					//--- insert query.
				} else {
					/*if(mysqli_errno($con) == 1062)*/
					echo "similar request happened less than ".$timeout." secs ago<br />";
				}
				$qr = 'insert into updatelogs value ("'.$_SERVER['REMOTE_ADDR'] .'","'.$curtime.'","'.$_SESSION['username'].'")';
				echo $qr."<br />";
				$query = mysqli_query($con,$qr);
				echo mysqli_error($con);
				if(!mysqli_select_db($con, "contests")){
					echo "Cannot open database!!".mysqli_error($con);
				}
				$query = mysqli_query($con,"select code,name from ".$ccode." order by code;");
				$result = $query->fetch_all( MYSQLI_ASSOC);
				$tofetch = array();
				foreach( $result as $row ){
				   $tofetch[]='http://www.codechef.com/status/'.$row['code'].','.$_SESSION['handle'].'';
				   echo 'http://www.codechef.com/status/'.$row['code'].','.$_SESSION['handle'].'';
				   echo '<br />';
				} 

$r = multiRequest($tofetch);
 
echo '<pre>';
print_r($r);
				
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
?>