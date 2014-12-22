<?php 
$log = fopen("test.txt","r");
while(!feof($log))
echo fgets($log)."<br />";
?>















