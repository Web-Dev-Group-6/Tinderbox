$(document).ready(function() {

	$("#profile-next").click(function() {
	    $("#profile-info-1").hide();
	    $("#profile-info-2").show();
	});

	$("#profile-prev").click(function() {
	    $("#profile-info-2").hide();
	    $("#profile-info-1").show();
	});

});