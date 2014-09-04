function countDown(secs){
		if(secs < 0)
			return "Time over!!"
		return 	  (Math.floor(secs/86400)>0?(Math.floor(secs/86400) + " Day(s) " ):"")
				+ (Math.floor((secs % 86400)/3600)>0?Math.floor((secs % 86400)/3600) + ":":"") 
				+ (Math.floor((secs % 3600)/60)>0?Math.floor((secs % 3600)/60) + ":":"")
				+ (secs % 60) ;


	}

	function set(endtime,id){
	    var d = (new Date).getTime()/1000 |0 ;
		var t1=document.getElementById(id);	
		t1.innerHTML = countDown(endtime - d);
		setTimeout(function(){set(endtime,id)},1000);
	}