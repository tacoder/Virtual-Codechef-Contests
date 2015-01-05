$(document).ready(function(){
    var dur = 130;
	$('.topnavright').hover(function(){
		$("#logInBox").fadeIn(dur);
	});
	
    $("#main-content-wrapper,#maincontent,#front,#search-wizard,#sidenav").hover(function(){
        $("#logInBox").fadeOut(dur);
    });

});