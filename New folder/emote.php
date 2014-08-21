<html>
<head>
	<title>KH custom Emotes</title>
	<link rel="stylesheet" type="text/css" href="emote.css" />
</head>
<body>
<p>These emotes are for <a href="http://instasynch.com/rooms/KitchenHell">KitchenHell</a> </p>
<p>To get these emotes, install userscript from: <a href="https://greasyfork.org/scripts/3950-emotes-for-fine-dining">Here</a></p>
<table >
<?php 

$codes["raw"] = '<img src="http://imgur.com/NW9oGy2.png">';
$codes["giveup"] = '<img src="http://i.imgur.com/35FpetD.gif">'; 
$codes["dumbo"] = '<img src="http://i.imgur.com/YemL9d3.gif">'; 
$codes["yes"] = '<img src="http://i.imgur.com/QglALDX.gif">'; 
$codes["comeon"] = '<img src="http://i.imgur.com/2OL5qua.gif">'; 
$codes["amy"] = '<img src="http://i.imgur.com/PDFkgoI.gif">'; 
$codes["bb"] = '<img src="http://i.imgur.com/Qbmleyg.png">'; 
$codes["out"] = '<img src="http://i.imgur.com/idy9MgT.gif">'; 
$codes["unf"] = '<img src="http://i.imgur.com/wlzoeTV.gif">'; 
$codes["towel"] = '<img src="http://i.imgur.com/MjsGXh1.gif">'; 
$codes["fap"] = '<img src="http://i.imgur.com/Uib0MNk.gif">'; 

foreach($codes as $name=>$link){
	echo "<tr>";
	echo "<td>$name</td>";
	echo "<td>$link</td>";
	echo "</tr>";

}

?></table>