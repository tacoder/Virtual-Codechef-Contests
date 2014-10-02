


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
}

 
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
 
print_r($r);
 
?>