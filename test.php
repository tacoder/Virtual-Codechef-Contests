
<?php
if(isset($_GET['code'])) {
	echo "yes";
	echo $_GET['code'];
}

/*
require("includes/connect.php");
if(!mysqli_select_db($con, "contests")){
	echo "Cannot open database!!".mysqli_error($con);
}
$query = mysqli_query($con,"select code,name from list");
$result = $query->fetch_all( MYSQLI_ASSOC);
foreach( $result as $row ){
   $c = $row['code'];
   $r = $row['name'];
   echo $r;
   echo $c;
   echo "<br />";
}
/*
require("includes/simple_html_dom.php");
function add_problem($pcode,$code){
	$contPage=/*file_get_html('http://www.codechef.com/problems/'.$pcode);*
	file_get_html('http://www.codechef.com/problems/'.$pcode, false, null,  -1, -1,  true, true,  DEFAULT_TARGET_CHARSET,false);
	$file = fopen("contest/".$code."/".$pcode.".php","w");
	echo $contPage;
	fwrite($file,'<?php require("../../includes/header.php"); ?>');
	foreach($contPage->find('div[class="primary-col-wrapper"]') as $outerdiv){
		foreach($outerdiv->find('div[class="primary-colum-width-left"]') as $div){
			foreach($div->children(0)->find('div[class="content"]') as $content){
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
add_problem("PERMSUFF","COOK49");
*/
?>