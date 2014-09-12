

function countDown(secs){
	var toReturn = "";
	if(secs <= 0 )
		toReturn += '<span style="color:grey;font-weight:bold;font-style: italic;">';
	else if(secs < 600)
		toReturn += '<span style="color:#dd0000;font-weight:bold;font-style: italic;">';
	if(secs < 0)
		toReturn += "00:00:00";
	else
		toReturn += ((Math.floor(secs/86400)>0?(Math.floor(secs/86400) + " Day(s) " ):"")
			+ (checkTime(Math.floor((secs % 86400)/3600)) + ":") 
			+ (checkTime(Math.floor((secs % 3600)/60)) + ":")
			+ checkTime(secs % 60)) ;
	if(secs < 600)
		toReturn += '</span>';
	return toReturn;
	


	}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
	function set(endtime,id){
	    var d = (new Date).getTime()/1000 |0 ;
		var t1=document.getElementById(id);	
		t1.innerHTML = countDown(endtime - d);
		setTimeout(function(){set(endtime,id)},1000);
	}