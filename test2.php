<?php

$st = time();
require __DIR__ . '/includes/parallelcurl.php';

function on_request_done($content, $url, $ch, $search) {
   echo $content;
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

$max_requests = 100;
$parallel_curl = new ParallelCurl($max_requests);

foreach ($data as $url) {
    $parallel_curl->startRequest($url, 'on_request_done');
}

//$parallel_curl->finishAllRequests();

$en = time();
echo "script ended at:";
echo $en;
echo "<br />";
echo "total time:";
echo $en-$st;