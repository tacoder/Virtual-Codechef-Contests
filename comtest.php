<?php 

require('includes/connect.php');

if(!mysqli_select_db($con, "contests")){
    if(!mysqli_query($con,"create database contests;")){
        echo "Cannot create database!!".mysqli_error($con);
        die();
    } else {
        mysqli_select_db($con, "contests");
    }
    
}

$jsList = fopen("includes/compete.js","w+");

$query = mysqli_query($con,"select code,name,end from list order by name");
//$resultArray = mysqli_fetch_all($query);

//print_r($resultArray);

fwrite($jsList, "var contests=Array(");

while ($row = mysqli_fetch_assoc($query)) {
    fwrite($jsList, 'Array("'.$row["name"].'","'.$row["code"].'","'.$row["end"].'"),'."\n");
    echo "Code: ".$row["code"]."<br />";
    echo "Name: ".$row["name"]."<br />";
    echo "end".$row["end"]."<br />";
}

fwrite($jsList, ");");

fwrite($jsList,'function searchTerm(){
        console.log("sedarch called");
        var term = $("#search-form input[type=\'text\']").val();
        var category = $("#search-form select").val();
        console.log("term = :"+term);
        console.log("category = :"+category);

        for (contest of contests){ 
            var str=contest[0];
            var regexp = new RegExp(term);
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

}); 
');

?>