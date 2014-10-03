<?php 
require('includes/simple_html_dom.php');

$contPage=file_get_html("errpage.html");
if($contPage->find("p[class=err-big-label],p[class=err-message]"))
	echo "yes";
//err-big-label
//err-message
?>