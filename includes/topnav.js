$(document).ready(function(){

	$('.topnavright').hover(function(){
		$("#logInBox").fadeIn();
	});
	$('#maincontent,#sidenav').hover(function(){
		$("#logInBox").fadeOut();
	});
});