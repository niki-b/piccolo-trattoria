$(document).ready(function() {

	$(".menuContent:first").show(); 	
	
	$("#menuNav a").click(function(){
	
		var activeTab = $(this).attr("href"); 
		$("#menuNav a").removeClass("active");
	
		$(this).addClass("active"); 
	 
		$(".menuContent").hide(); 
	 
		$(activeTab).fadeIn(600); 
		return false;
	});
});